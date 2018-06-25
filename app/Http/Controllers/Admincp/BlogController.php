<?php

namespace App\Http\Controllers\Admincp;

use App\Http\Requests\Blog\AddBlogRequest;
use App\Http\Requests\Blog\EditBlogRequest;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function getBlog(){
        $data['bloglist'] = DB::table('pdf_blogs')
            ->join('pdf_users','pdf_blogs.user_id','=','pdf_users.user_id')
            ->select('pdf_blogs.*','pdf_users.user_id','pdf_users.user_name')
            ->orderBy('blog_id','desc')
            ->get();
        return view('admincp.blog.blog', $data);
    }

    public function getAddBlog(){
        return view('admincp.blog.addblog');
    }

    public function postAddBlog(AddBlogRequest $request){
        $blog = new Blog();
        $imgname = $request->img->getClientOriginalName();

        $blog->blog_title = $request->title;
        $blog->blog_slug = str_slug($request->title);
        $blog->blog_img = $imgname;
        $blog->blog_description = $request->blogdes;
        $blog->blog_content = $request->blogcontent;
        $blog->user_id = Auth::user()->user_id;
        $blog->save();
        $request->img->move('uploads/blogs',$imgname);
        return back()->withInput()->with('success', 'Đã thêm mới bài viết');
    }

    public function getEditBlog($blog_id){
        $data['blog'] = Blog::find($blog_id);
        return view('admincp.blog.editblog', $data);
    }

    public function postEditBlog(EditBlogRequest $request, $blog_id){
        $blog = new Blog();
        $arr['blog_title'] = $request->title;
        $arr['blog_slug'] = str_slug($request->title);
        $arr['blog_description'] = $request->blogdes;
        $arr['blog_content'] = $request->blogcontent;
        if($request->hasFile('img')){
            $imgname = $request->img->getClientOriginalName();
            $arr['product_img'] = $imgname;
            $request->img->move('uploads/blogs',$imgname);
        }
        $blog::where('blog_id',$blog_id)->update($arr);
        return back()->withInput()->with('success', 'Đã cập nhật bài viết');
    }

    public function getDelBlog($blog_id){
        Blog::destroy($blog_id);
        return back()->withInput()->with('success', 'Đã xóa bài viết');
    }

}

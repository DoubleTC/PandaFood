<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Slide;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function getHome(){
        $data['productlist'] = Product::where([
            ['product_condition', '=', '1'],
            ['product_featured', '=', '1']
        ])->orderBy('product_id','desc')->limit(10)->get();
        $data['bloglist'] = Blog::orderBy('blog_id','desc')->limit(3)->get();
        $data['slidelist'] = Slide::orderBy('slide_id','desc')->get();
        $data['catelist'] = Category::orderBy('category_id','desc')->get();
        return view('frontend.home', $data);
    }

    public function getDetail($product_id){
        $data['title'] = Product::find($product_id);
        $data['product'] = DB::table('pdf_products')
            ->join('pdf_categories','pdf_products.category_id','=','pdf_categories.category_id')
            ->select('pdf_products.*','pdf_categories.category_id','pdf_categories.category_title')
            ->where('product_id', $product_id)
            ->get();
        $data['relaproduct'] = Product::where([
            ['product_condition', '=', '1']
        ])->orderBy('product_id','desc')->get();
        return view('frontend.product-detail', $data);
    }

    public function getCategory($category_id){
        $data['category'] = Category::find($category_id);
        $data['product'] = Product::where('category_id', $category_id)->orderBy('product_id', 'desc')->paginate(9);
        return view('frontend.category', $data);
    }

    public function getSearch(Request $request){
        $result = $request->tu_khoa;
        $result = str_replace(' ', '%', $result);
        $data['product'] = Product::where('product_name', 'like', '%'.$result.'%')->paginate(9);
        $data['keyword'] = $result;
        return view('frontend.search', $data);
    }

    public function getLogout(){
        Auth::logout();
        return back();
    }
}

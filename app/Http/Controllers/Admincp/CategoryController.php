<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Category\AddCateRequest;
use App\Http\Requests\Category\EditCateRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getCategory(){
        $data['catelist'] = Category::All();
        return view('admincp.category.category', $data);
    }

    public function postCategory(AddCateRequest $request){
        $category = new Category();
        $category->category_title = $request->catetitle;
        $category->category_slug = str_slug($request->catetitle);
        $category->save();
        return back()->withInput()->with('success', 'Đã thêm danh mục');
    }

    public function getEditCategory($category_id){
        $data['cate'] = Category::find($category_id);
        return view('admincp.category.editcategory', $data);
    }

    public function postEditCategory(EditCateRequest $request, $category_id){
        $category = Category::find($category_id);
        $category->category_title = $request->catetitle;
        $category->category_slug = str_slug($request->catetitle);
        $category->save();
        return back()->withInput()->with('success', 'Đã cập nhật danh mục');
    }

    public function getDelCategory($category_id){
        Category::destroy($category_id);
        return back()->withInput()->with('success', 'Đã xóa danh mục');
    }
}

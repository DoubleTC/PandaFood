<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\AddProductRequest;
use App\Http\Requests\Product\EditProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct(){
        $data['productlist'] = DB::table('pdf_products')
            ->join('pdf_categories','pdf_products.category_id','=','pdf_categories.category_id')
            ->select('pdf_products.*','pdf_categories.category_id','pdf_categories.category_title')
            ->orderBy('product_id','desc')
            ->get();
        return view('admincp.product.product',$data);
    }

    public function getAddProduct(){
        $data['catelist'] = Category::All();
        return view('admincp.product.addproduct',$data);
    }

    public function postAddProduct(AddProductRequest $request){
        $imgname = $request->img->getClientOriginalName();

        $product = new Product;
        $product->product_name = $request->name;
        $product->product_slug = str_slug($request->name);
        $product->product_unit = $request->unit;
        $product->product_price = $request->price;
        $product->product_promotion = $request->promotion;
        $product->product_condition = $request->condition;
        $product->product_featured = $request->featured;
        $product->product_img = $imgname;
        $product->product_description = $request->description;
        $product->product_content = $request->prodcontent;
        $product->category_id = $request->category;
        $product->save();
        $request->img->move('uploads/products',$imgname);
        return back()->withInput()->with('success', 'Đã thêm mới sản phẩm');
    }

    public function getEditProduct($product_id){
        $data['product'] = Product::Find($product_id);
        $data['catelist'] = Category::All();
        return view('admincp.product.editproduct',$data);
    }

    public function postEditProduct(EditProductRequest $request, $product_id){
        $product = new Product();
        $arr['product_name'] = $request->name;
        $arr['product_slug'] = str_slug($request->name);
        $arr['product_unit'] = $request->unit;
        $arr['product_price'] = $request->price;
        $arr['product_promotion'] = $request->promotion;
        $arr['product_condition'] = $request->condition;
        $arr['product_featured'] = $request->featured;
        $arr['product_description'] = $request->description;
        $arr['product_content'] = $request->prodcontent;
        $arr['category_id'] = $request->category;
        if($request->hasFile('img')){
            $imgname = $request->img->getClientOriginalName();
            $arr['product_img'] = $imgname;
            $request->img->move('uploads/products',$imgname);
        }
        $product::where('product_id',$product_id)->update($arr);
        return back()->withInput()->with('success', 'Đã cập nhật sản phẩm');
    }

    public function getDelProduct($product_id){
        Product::destroy($product_id);
        return back()->withInput()->with('success', 'Đã xóa sản phẩm');
    }
}

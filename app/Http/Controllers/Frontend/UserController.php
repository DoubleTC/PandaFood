<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Hamcrest\Core\DescribedAs;

class UserController extends Controller
{
    public function getUser(){
        $data['orders'] = DB::table('pdf_orders')
            ->join('pdf_shippers','pdf_orders.shipper_id','=','pdf_shippers.shipper_id')
            ->select('pdf_orders.*','pdf_shippers.shipper_id','pdf_shippers.shipper_name')
            ->where('user_id', Auth::user()->user_id)
            ->orderBy('order_id','desc')
            ->limit(5)
            ->get();
        return view('frontend.userpanel', $data);
    }

    public function getOrder(){
        $data['orders'] = DB::table('pdf_orders')
            ->join('pdf_shippers','pdf_orders.shipper_id','=','pdf_shippers.shipper_id')
            ->select('pdf_orders.*','pdf_shippers.shipper_id','pdf_shippers.shipper_name')
            ->where('user_id', Auth::user()->user_id)
            ->orderBy('order_id','desc')
            ->paginate(10);
        return view('frontend.listorder', $data);
    }

    public function getOrderDetail($order_id, $id = null){
        $data['order'] = DB::table('pdf_orders')
            ->join('pdf_shippers','pdf_orders.shipper_id','=','pdf_shippers.shipper_id')
            ->select('pdf_orders.*','pdf_shippers.shipper_id','pdf_shippers.shipper_name')
            ->where([
                ['user_id', '=', Auth::user()->user_id],
                ['order_id', '=', $order_id]
            ])
            ->orderBy('order_id','desc')
            ->get();
        if($data['order']->isEmpty()){
            return view('frontend.404error');
        } else {
            foreach ($data['order'] as $item) {
                $id = $item->order_id;
            }
            $data['details'] = DB::table('pdf_orderdetails')
                ->join('pdf_products', 'pdf_orderdetails.product_id', '=', 'pdf_products.product_id')
                ->select('pdf_orderdetails.*', 'pdf_products.product_id', 'pdf_products.product_name', 'pdf_products.product_img', 'pdf_products.product_slug')
                ->where('order_id', $id)
                ->orderBy('detail_id', 'desc')
                ->get();
        }
        return view('frontend.orderdetail', $data);
    }
}

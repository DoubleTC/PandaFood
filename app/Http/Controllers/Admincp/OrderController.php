<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\Shipper;
use App\Models\OrderDetail;
use App\Http\Requests\Order\EditOrderRequest;

class OrderController extends Controller
{
    public function getOrder(){
        $data['orderslist'] = DB::table('pdf_orders')
            ->join('pdf_users','pdf_orders.user_id','=','pdf_users.user_id')
            ->join('pdf_shippers','pdf_orders.shipper_id','=','pdf_shippers.shipper_id')
            ->select('pdf_orders.*','pdf_users.user_id','pdf_users.user_name','pdf_shippers.*')
            ->get();
        return view('admincp.order.order', $data);
    }

    public function getEditOrder($order_id){
        $data['order'] = Order::find($order_id);
        $data['shippers'] = Shipper::all();
        $data['details'] = OrderDetail::where('order_id', $order_id)->get();
        return view('admincp.order.editorder', $data);
    }

    public function postEditOrder(EditOrderRequest $request){

    }

    public function getDelOrder($order_id){
        Order::destroy($order_id);
        return back()->withInput()->with('success', 'Đã xóa đơn hàng');
    }

}

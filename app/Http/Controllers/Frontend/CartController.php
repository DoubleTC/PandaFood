<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\OrderDetail;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Http\Requests\Cart\AddCartRequest;
use App\Http\Requests\Cart\CheckoutRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Information;

class CartController extends Controller
{
    public function postAddCart(AddCartRequest $request){
        if($request->qty <= 0){
            return back()->withInput()->with('error', 'Số lượng sản phẩm tối thiểu bằng 1');
        } else {
            $product = Product::find($request->id);
            Cart::add(['id' => $request->id, 'name' => $product->product_name, 'qty' => $request->qty, 'price' => $product->product_price, 'options' => ['img' => $product->product_img, 'slug' =>$product->product_slug]]);
            return redirect('gio-hang')->withInput()->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
        }
    }

    public function getCart(){
        $data['product'] = Cart::content();
        $data['total'] = Cart::total();
        return view('frontend.cart', $data);
    }

    public function getDelCart($rowId){
        if($rowId == 'all'){
            Cart::destroy();
            return back()->withInput()->with('success', 'Đã xóa toàn bộ sản phẩm trong giỏ hàng');
        } else {
            Cart::remove($rowId);
            return back()->withInput()->with('success', 'Đã xóa sản phẩm');
        }
    }
    public function postUpdateCart(Request $request){
        if($request->update == 'update_cart'){
            Cart::update($request->rowId, $request->qty);
        }
    }

    public function postCheckoutCart(CheckoutRequest $request){
        if(Cart::count() == 0){
            return back()->withInput()->with('error', 'Giỏ hàng không có sản phẩm nào để đặt mua');
        } else {
            $order = new Order();
            $order->order_total = str_replace(",", "", Cart::total());
            $order->order_name = $request->name;
            $order->order_phone = $request->phone;
            $order->order_address = $request->address;
            $order->order_note = $request->note;
            $order->order_receivetime = Carbon::now()->addDays(4);
            $order->order_methodpayment = $request->methodpayment;
            $order->order_status = 0;
            $order->user_id = Auth::user()->user_id;
            $order->shipper_id = 0;
            $order->save();

            foreach (Cart::content() as $items => $value) {
                $detail = new OrderDetail();
                $detail->detail_qty = $value->qty;
                $detail->detail_price = $value->price;
                $detail->detail_subtotal = $value->price * $value->qty;
                $detail->product_id = $value->id;
                $detail->order_id = $order->order_id;
                $detail->save();
            }
            Cart::destroy();

            /*$data = $request->all();
            $orderid = $order->order_id;
            Mail::send('frontend.email', $data, function ($message) use($orderid) {
                $shop = Information::find(1);
                $message->from($shop->info_email, $shop->info_name);
                $message->to(Auth::user()->user_email, Auth::user()->user_fullname);
                $message->cc('doubletcgaming@gmail.com', $shop->info_name);
                $message->subject('Thông tin đơn hàng #'.$orderid.'-'.$shop->name);
            }); */

            return back()->withInput()->with('success', 'Đã đặt hàng thành công! - Theo dõi đơn hàng của bạn tại đây');
        }
    }
}

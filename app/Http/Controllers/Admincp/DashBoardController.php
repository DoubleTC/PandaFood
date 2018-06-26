<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\User;

class DashBoardController extends Controller
{
    public function getDashBoard(){
        $data['user'] = User::where('group_id', 2)->count();
        $data['product'] = Product::count();
        $data['order'] = Order::count();
        $data['orderoke'] = Order::where('order_status', 4)->count();
        return view('admincp.index', $data);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->intended('admincp/login');
    }
}

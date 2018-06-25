<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function getDashBoard(){
        return view('admincp.index');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->intended('admincp/login');
    }
}

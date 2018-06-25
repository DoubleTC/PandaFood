<?php

namespace App\Http\Controllers\Admincp;

use App\Http\Requests\Shipper\AddShipperRequest;
use App\Http\Requests\Shipper\EditShipperRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipper;

class ShipperController extends Controller
{
    public function getShipper(){
        $data['shipperlist'] = Shipper::All();
        return view('admincp.shipper.shipper',$data);
    }

    public function postShipper(AddShipperRequest $request){
        $shipper = new Shipper();
        $shipper->shipper_name = $request->name;
        $shipper->shipper_phone = $request->phone;
        $shipper->save();
        return back()->withInput()->with('success', 'Đã thêm mới đối tác vận chuyển');
    }

    public function getEditShipper($shipper_id){
        $shipper['ship'] = Shipper::find($shipper_id);
        return view('admincp.shipper.editshipper',$shipper);
    }

    public function postEditShipper(EditShipperRequest $request, $shipper_id){
        $shipper = Shipper::find($shipper_id);
        $shipper->shipper_name = $request->name;
        $shipper->shipper_phone = $request->phone;
        $shipper->save();
        return back()->withInput()->with('success', 'Đã cập nhật đối tác vận chuyển');
    }

    public function getDelShipper($shipper_id){
        Shipper::destroy($shipper_id);
        return back()->withInput()->with('success', 'Xóa đối tác vận chuyển');
    }
}

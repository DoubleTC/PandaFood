<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Http\Requests\Information\EditInfoWebRequest;

class InfoWebController extends Controller
{
    public function getInfoWeb(){
        $data['info'] = Information::find(1);
        return view('admincp.infoweb', $data);
    }

    public function postInfoWeb(EditInfoWebRequest $request){
        $info = new Information();
        $arr['info_name'] = $request->name;
        $arr['info_title'] = $request->title;
        $arr['info_phone'] = $request->phone;
        $arr['info_email'] = $request->email;
        $arr['info_address'] = $request->address;
        $arr['info_facebook'] = $request->facebook;
        $arr['info_googleplus'] = $request->googleplus;
        $arr['info_embedcode'] = $request->embedcode;
        $arr['info_owner'] = $request->owner;
        $arr['info_keywords'] = $request->keywords;
        $arr['info_description'] = $request->description;
        if($request->hasFile('imgmain')){
            $imgmain = $request->imgmain->getClientOriginalName();
            $arr['info_imgmain'] = $imgmain;
            $request->imgmain->move('uploads/logos',$imgmain);
        }
        if($request->hasFile('imgtitle')){
            $imgtitle = $request->imgtitle->getClientOriginalName();
            $arr['info_imgtitle'] = $imgtitle;
            $request->imgtitle->move('uploads/imgtitle',$imgtitle);
        }
        $info::where('info_id',1)->update($arr);
        return back()->withInput()->with('success', 'Đã cập nhật thông tin Website');
    }
}

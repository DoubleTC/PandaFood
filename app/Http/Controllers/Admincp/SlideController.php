<?php

namespace App\Http\Controllers\Admincp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Http\Requests\Slide\AddSlideRequest;
use App\Http\Requests\Slide\EditSlideRequest;

class SlideController extends Controller
{
    public function getSlide(){
        $data['slidelist'] = Slide::all();
        return view('admincp.slide.slide', $data);
    }

    public function postSlide(AddSlideRequest $request){
        $slide = new Slide();
        $slide->slide_line1 = $request->line1;
        $slide->slide_line2 = $request->line2;
        $slide->slide_line3 = $request->line3;
        $slide->slide_url = $request->url;
        $imgname = $request->img->getClientOriginalName();
        $slide->slide_img = $imgname;
        $slide->save();
        $request->img->move('uploads/slides',$imgname);
        return back()->withInput()->with('success', 'Đã thêm mới Slide Banner');
    }

    public function getEditSlide($slide_id){
        $data['slide'] = Slide::find($slide_id);
        return view('admincp.slide.editslide', $data);
    }

    public function postEditSlide(EditSlideRequest $request, $slide_id){
        $slide = new Slide();
        $arr['slide_line1'] = $request->line1;
        $arr['slide_line2'] = $request->line2;
        $arr['slide_line3'] = $request->line3;
        $arr['slide_url'] = $request->url;
        if($request->hasFile('img')){
            $imgname = $request->img->getClientOriginalName();
            $arr['slide_img'] = $imgname;
            $request->img->move('uploads/slides',$imgname);
        }
        $slide::where('slide_id',$slide_id)->update($arr);
        return back()->withInput()->with('success', 'Đã cập nhật Slide Banner');
    }

    public function getDelSlide($slide_id){
        Slide::destroy($slide_id);
        return back()->withInput()->with('success', 'Đã xóa Slide Banner');
    }
}

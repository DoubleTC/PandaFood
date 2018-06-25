@extends('admincp.master')
@section('title', 'Chỉnh sửa Slide Banner')
@section('content')

    <div class="content">
        <div class="container-fluid">
            @include('success.note')
            @include('errors.note')
            <div class="row">

                <div class="col-md-8">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">build</i>
                            </div>
                            <h4 class="card-title">Chỉnh sửa Slide Banner</h4>
                        </div>

                        <div class="card-body ">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <label class="col-md-2 col-form-label">Tiêu đề 1</label>
                                    <div class="col-md-8">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="line1" type="text" class="form-control" value="{{$slide->slide_line1}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">Tiêu đề 2</label>
                                    <div class="col-md-8">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="line2" type="text" class="form-control" value="{{$slide->slide_line2}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">Tiêu đề 3</label>
                                    <div class="col-md-8">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="line3" type="text" class="form-control" value="{{$slide->slide_line3}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">Đường dẫn URL</label>
                                    <div class="col-md-8">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="url" type="text" class="form-control" value="{{$slide->slide_url}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label">Ảnh đại diện</label>
                                    <div class="col-md-8">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{asset('uploads/slides/'.$slide->slide_img)}}" alt="">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                        <span class="btn btn-rose btn-round btn-file">
                                                            <span class="fileinput-new">Chọn ảnh</span>
                                                            <span class="fileinput-exists">Đổi ảnh</span>
                                                            <input type="file" name="img"/>
                                                        </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Xóa ảnh</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button name="submit" type="submit" class="btn btn-rose">Cập nhật<div class="ripple-container"></div></button>
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-rose" href="{{asset('admincp/dashboard/slide')}}"><i class="material-icons">
                            keyboard_arrow_left
                        </i> Quay lại <div class="ripple-container"></div></a>
                </div>
            </div>
        </div>
    </div>



@stop
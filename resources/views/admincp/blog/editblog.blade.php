@extends('admincp.master')
@section('title', 'Thêm mới sản phẩm')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">build</i>
                            </div>
                            <h4 class="card-title">Thêm mới sản phẩm</h4>
                        </div>

                        <div class="card-body ">
                            @include('success.note')
                            @include('errors.note')
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label">Tiêu đề</label>
                                            <div class="col-md-8">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="title" value="{{$blog->blog_title}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2 col-form-label">Ảnh đại diện</label>
                                            <div class="col-md-8">
                                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="">
                                                    <div class="fileinput-new thumbnail">
                                                        <img src="{{asset('./uploads/blogs/'.$blog->blog_img)}}" alt="{{$blog->blog_title}}">
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
                                            <label class="col-md-2 col-form-label">Lời nói đầu</label>
                                            <div class="col-md-8">
                                                <div class="form-group bmd-form-group">
                                                    <textarea class="form-control" name="blogdes" required>{{$blog->blog_description}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-2 col-form-label">Nội dung bài viết</label>
                                            <div class="col-md-8">
                                                <div class="form-group bmd-form-group">
                                                    <textarea class="form-control" name="blogcontent" required>{{$blog->blog_content}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-rose">Thêm mới<div class="ripple-container"></div></button>
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
                    <a class="btn btn-rose" href="{{asset('admincp/dashboard/blog')}}"><i class="material-icons">
                            keyboard_arrow_left
                        </i> Quay lại <div class="ripple-container"></div><div class="ripple-container"></div></a>

                </div>
            </div>
        </div>
    </div>
@stop
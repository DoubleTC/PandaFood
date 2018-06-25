@extends('admincp.master')
@section('title', 'Slide Banner')
@section('content')

    <div class="content">
        <div class="container-fluid">
            @include('success.note')
            @include('errors.note')
            <div class="row">

                <div class="col-md-4">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">add_circle</i>
                            </div>
                            <h4 class="card-title">Thêm mới Slide Banner</h4>
                        </div>

                        <div class="card-body ">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <label class="col-md-3 col-form-label">Tiêu đề 1</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="line1" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Tiêu đề 2</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="line2" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Tiêu đề 3</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="line3" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Đường dẫn URL</label>
                                    <div class="col-md-9">
                                        <div class="form-group has-default bmd-form-group">
                                            <input name="url" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Ảnh đại diện</label>
                                    <div class="col-md-9">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="">
                                            <div class="fileinput-new thumbnail">
                                                <img src="./assetscp/img/image_placeholder.jpg" alt="">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                        <span class="btn btn-rose btn-round btn-file">
                                                            <span class="fileinput-new">Chọn ảnh</span>
                                                            <span class="fileinput-exists">Đổi ảnh</span>
                                                            <input type="file" name="img" required/>
                                                        </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Xóa ảnh</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button name="submit" type="submit" class="btn btn-rose">Thêm mới<div class="ripple-container"></div></button>
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">list</i>
                            </div>
                            <h4 class="card-title">Danh sách Slide Banner</h4>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã</th>
                                        <th>Tiều đề 1</th>
                                        <th>Tiều đề 2</th>
                                        <th>Tiều đề 3</th>
                                        <th>URL</th>
                                        <th class="text-center">Hình ảnh</th>
                                        <th class="disabled-sorting text-center">Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Mã</th>
                                        <th>Tiều đề 1</th>
                                        <th>Tiều đề 2</th>
                                        <th>Tiều đề 3</th>
                                        <th>URL</th>
                                        <th class="text-center">Hình ảnh</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($slidelist as $slide)
                                        <tr>
                                            <td class="text-center">{{$slide->slide_id}}</td>
                                            <td>{{$slide->slide_line1}}</td>
                                            <td>{{$slide->slide_line2}}</td>
                                            <td>{{$slide->slide_line3}}</td>
                                            <td>{{$slide->slide_url}}</td>
                                            <td class="text-center">
                                                <img height="100px" src="{{asset('./uploads/slides/'.$slide->slide_img)}}" class="thumbnail">
                                            </td>
                                            <td class="text-center">
                                                <a href="{{asset('admincp/dashboard/slide/edit/'.$slide->slide_id)}}" class="btn btn-warning btn-just-icon">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{asset('admincp/dashboard/slide/delete/'.$slide->slide_id)}}" class="btn btn-danger btn-just-icon" onclick="return confirm('Nếu xóa danh mục này, những sản phẩm thuộc danh mục này cũng sẽ bị xóa.\nBạn có muốn xóa danh mục này không?')">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
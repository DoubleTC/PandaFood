@extends('admincp.master')
@section('title', 'Danh sách bài viết')
@section('content')

    <div class="content">
        <div class="container-fluid">
            @include('success.note')
            @include('errors.note')
            <div class="row">

                <div class="col-md-12">
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">list</i>
                            </div>
                            <h4 class="card-title">Danh sách bài viết</h4>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã bài viết</th>
                                        <th class="text-left">Tiêu đề</th>
                                        <th class="text-left">Đường dẫn</th>
                                        <th class="text-center">Hình ảnh</th>
                                        <th class="text-center">Tác giả</th>
                                        <th class="text-center">Cập nhật</th>
                                        <th class="text-center">Ngày tạo</th>
                                        <th class="disabled-sorting text-center">Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Mã bài viết</th>
                                        <th class="text-left">Tiêu đề</th>
                                        <th class="text-left">Đường dẫn</th>
                                        <th class="text-center">Hình ảnh</th>
                                        <th class="text-center">Tác giả</th>
                                        <th class="text-center">Cập nhật</th>
                                        <th class="text-center">Ngày tạo</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($bloglist as $blog)
                                        <tr>
                                            <td class="text-center">{{$blog->blog_id}}</td>
                                            <td>{{$blog->blog_title}}</td>
                                            <td>{{$blog->blog_slug}}</td>
                                            <td class="text-center">
                                                <img height="100px" src="{{asset('./uploads/blogs/'.$blog->blog_img)}}" class="thumbnail">
                                            </td>
                                            <td class="text-center">{{$blog->user_name}}</td>
                                            <td class="text-right">{{$blog->updated_at}}</td>
                                            <td class="text-right">{{$blog->created_at}}</td>
                                            <td class="text-center">
                                                <a href="{{asset('admincp/dashboard/blog/edit/'.$blog->blog_id)}}" class="btn btn-warning btn-just-icon">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{asset('admincp/dashboard/blog/delete/'.$blog->blog_id)}}" class="btn btn-danger btn-just-icon" onclick="return confirm('Bạn có muốn xóa bài viết này không?')">
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
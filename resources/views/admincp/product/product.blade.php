@extends('admincp.master')
@section('title', 'Danh sách sản phẩm')
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
                            <h4 class="card-title">Danh sách sản phẩm</h4>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã sản phẩm</th>
                                        <th class="text-left">Tên sản phẩm</th>
                                        <th class="text-left">Danh mục</th>
                                        <th class="text-center">Đơn vị</th>
                                        <th class="text-right">Đơn giá</th>
                                        <th class="text-center">Tình trạng</th>
                                        <th class="text-center">Nổi bật</th>
                                        <th class="text-center">Hình ảnh</th>
                                        <th class="text-center">Cập nhật</th>
                                        <th class="disabled-sorting text-center">Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Mã sản phẩm</th>
                                        <th class="text-center">Tên sản phẩm</th>
                                        <th class="text-center">Danh mục</th>
                                        <th class="text-center">Đơn vị</th>
                                        <th class="text-center">Đơn giá</th>
                                        <th class="text-center">Tình trạng</th>
                                        <th class="text-center">Nổi bật</th>
                                        <th class="text-center">Hình ảnh</th>
                                        <th class="text-center">Cập nhật</th>
                                        <th class="text-center">Tác vụ</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($productlist as $prod)
                                        <tr>
                                            <td class="text-center">{{$prod->product_id}}</td>
                                            <td>{{$prod->product_name}}</td>
                                            <td>{{$prod->category_title}}</td>
                                            <td class="text-center">{{$prod->product_unit}}</td>
                                            <td class="text-right">{{number_format($prod->product_price)}} VNĐ</td>
                                            <td class="text-center">@if($prod->product_condition == 1) Còn hàng @else Hết hàng @endif</td>
                                            <td class="text-center">@if($prod->product_featured == 1) Có @else Không @endif</td>
                                            <td class="text-center">
                                                <img height="100px" src="{{asset('./uploads/products/'.$prod->product_img)}}" class="thumbnail">
                                            </td>
                                            <td class="text-center">{{$prod->updated_at}}</td>
                                            <td class="text-center">
                                                <a href="{{asset('admincp/dashboard/product/edit/'.$prod->product_id)}}" class="btn btn-warning btn-just-icon">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{asset('admincp/dashboard/product/delete/'.$prod->product_id)}}" class="btn btn-danger btn-just-icon" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')">
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
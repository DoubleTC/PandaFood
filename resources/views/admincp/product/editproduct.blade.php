@extends('admincp.master')
@section('title', 'Cập nhật sản phẩm')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('success.note')
                    @include('errors.note')
                    <div class="card ">

                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">build</i>
                            </div>
                            <h4 class="card-title">Cập nhật sản phẩm</h4>
                        </div>

                        <div class="card-body ">

                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Tên sản phẩm</label>
                                            <div class="col-md-9">
                                                <div class="form-group has-default bmd-form-group">
                                                    <input type="text" class="form-control" name="name" value="{{$product->product_name}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Danh mục sản phẩm</label>

                                            <div class="col-md-9 col-sm-12">
                                                <select required class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="category" title="Danh mục sản phẩm">
                                                    <option disabled>Chọn danh mục sản phẩm</option>
                                                    @foreach($catelist as $cate)
                                                        <option value="{{$cate->category_id}}" @if($product->category_id == $cate->category_id) selected @endif>{{$cate->category_title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Đơn vị</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="form-control" name="unit" value="{{$product->product_unit}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Đơn giá</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="form-control" name="price" value="{{$product->product_price}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Khuyến mãi</label>
                                            <div class="col-md-9">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="form-control" name="promotion" value="{{$product->product_promotion}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Tình trạng</label>

                                            <div class="col-md-9 col-sm-12">
                                                <select required class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="condition" title="Tình trạng sản phẩm">
                                                    <option disabled>Chọn tình trạng sản phẩm</option>
                                                    <option value="1" @if($product->product_condition == 1) selected @endif>Còn hàng</option>
                                                    <option value="0" @if($product->product_condition == 0) selected @endif>Hết hàng</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Nổi bật</label>
                                            <div class="col-md-9 col-sm-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="featured" value="1" @if($product->product_featured == 1)checked @endif>
                                                        Có
                                                        <span class="circle">
                                                      <span class="check"></span>
                                                  </span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="featured" value="0" @if($product->product_featured == 0)checked @endif>
                                                        Không
                                                        <span class="circle">
                                                      <span class="check"></span>
                                                  </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label">Ảnh đại diện</label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="">
                                                    <div class="fileinput-new thumbnail">
                                                        <img src="{{asset('./uploads/products/'.$product->product_img)}}" alt="{{$product->product_name}}">
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

                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <label class="col-md-1 col-form-label">Mô tả</label>
                                            <div class="col-md-10">
                                                <div class="form-group bmd-form-group">
                                                    <textarea class="form-control" rows="5" name="description">{{$product->product_description}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-1 col-form-label">Nội dung bài viết</label>
                                            <div class="col-md-10">
                                                <div class="form-group bmd-form-group">
                                                    <textarea class="form-control" name="prodcontent">{{$product->product_content}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-rose">Cập nhật<div class="ripple-container"></div></button>
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
                    <a class="btn btn-rose" href="{{asset('admincp/dashboard/product')}}"><i class="material-icons">
                            keyboard_arrow_left
                        </i> Quay lại <div class="ripple-container"></div><div class="ripple-container"></div></a>

                </div>
            </div>
        </div>
    </div>
@stop
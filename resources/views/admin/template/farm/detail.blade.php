@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Chi tiết trang trại</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Chi tiết Trang trại có mã {{$item->id}}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Tên trang trại *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->name}}</label>
                        </div>
                    </div>

                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Email *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->email}}</label>
                        </div>
                    </div>

                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Số điện thoại *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->phone}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày tạo *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->created_at}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày cập nhật *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->updated_at ==null ? "Chưa cập nhật" : $items->updated_at }}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">
                                @switch($item['status'])
                                    @case(1)
                                    Chưa xóa
                                    @break
                                    @case(0)
                                    Đã xóa
                                    @break
                                @endswitch
                            </label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ảnh bài viết *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <img src="{{$item->FirstImage}}" class="img-thumbnail" style="width: 30%" alt="">
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Mô tả *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{!! $item->description !!}</label>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/farms"><button class="btn btn-primary" type="button">Quay về danh sách bài viết</button></a>
                            <a href="/admin/farm/update/{{$item->id}}"><button class="btn btn-warning" type="button">Cập nhật</button></a>
                            <a href="/admin/farm/delete/{{$item->id}}"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection

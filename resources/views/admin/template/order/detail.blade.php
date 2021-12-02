@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Chi tiết đơn hàng</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Chi tiết đơn hàng mã {{$item->id}}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Trạng thái *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->HandlerStatus}}</label>
                        </div>
                    </div>

                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Tên người nhận *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->ship_name}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Số điện thoại *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->ship_phone}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Email *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->ship_email}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->ship_address}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ghi chú *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->ship_note}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Thanh toán *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->HandlerPayment}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày tạo đơn hàng *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->created_at}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày cập nhật trạng thái *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->updated_at ==null ? "Chưa cập nhật" : $item->updated_at }}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tổng giá *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{number_format($item->total_price)}} VNĐ</label>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/orders"><button class="btn btn-primary" type="button">Quay về danh sách đơn hàng</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection

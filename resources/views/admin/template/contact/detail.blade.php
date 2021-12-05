@extends('admin.master-admin')
@section('page-css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
@endsection
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Chi tiết phản hồi</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Chi tiết phản hồi có mã {{$item->id}}</h2>
                    <div class="clearfix"></div>
                </div>
                @if(\Illuminate\Support\Facades\Session::has('message'))
                    <div style="margin-top: 15px">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>{{\Illuminate\Support\Facades\Session::get('message')}}</strong>
                        </div>
                    </div>
                @endif
                <div class="x_content">
                    <br/>
                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Tên người gửi *</label>
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

                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Địa chỉ *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->address}}</label>
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
                            <label class="col-form-label">{{$item->updated_at ==null ? "Chưa cập nhật" : $item->updated_at }}</label>
                        </div>
                    </div>

                    <form action="/admin/contact/update/status" method="post">
                        @csrf
                        <div class="form-group item row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Trạng thái *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$item->HandlerStatus}}</label>

                                <input type="hidden" value="{{$item->id}}" name="id">
                                <select name="status-update" class="status-update" data-id="{{$item->id}}" style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd" >
                                    <option value="0" {{$item->status == \App\Enums\ContactStatus::Delete ? 'selected' : ''}}>Đã xóa</option>
                                    <option value="1" {{$item->status == \App\Enums\ContactStatus::Unread ? 'selected' : ''}}>Chưa đọc</option>
                                    <option value="2" {{$item->status == \App\Enums\ContactStatus::Read ? 'selected' : ''}}>Đã đọc</option>
                                </select>
                            </div>
                        </div>
                    </form>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Phản hồi *</label>
                        <div class="col-md-8 col-sm-8 ">
                            <label class="col-form-label">{{$item->message}}</label>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/contacts"><button class="btn btn-primary" type="button">Quay về danh sách phản hồi</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        $('#status').change(function () {
            this.form.submit();
        })

    </script>
@endsection

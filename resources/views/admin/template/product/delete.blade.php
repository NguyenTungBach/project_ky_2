@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Xóa sản phẩm</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bạn có chắc muốn xóa sản phẩm này</h2>
                    <div class="clearfix"></div>
                </div>
                <form action="/admin/product/delete?id={{$item->id}}" method="post">
                @csrf
                    <div class="x_content">
                        <br/>
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Id *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$item->id}}</label>
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Tên sản phẩm *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$item->name}}</label>
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Ảnh *</label>
                            <div class="col-md-2 col-sm-2 ">
                                <img src="{{$item->firstImage}}" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-danger">Đồng ý xóa</button>
                                <a href="/admin/products"><button class="btn btn-primary" type="button">Quay về danh sách sản phẩm</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection

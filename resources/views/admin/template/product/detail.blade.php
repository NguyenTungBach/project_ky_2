@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Chi tiết sản phẩm</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Chi tiết sản phẩm</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Name *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->name}}</label>
                        </div>
                    </div>

                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Price *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->FormatPrice}} VNĐ</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Categories *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->category->name}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Created at *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->created_at}}</label>
                        </div>
                    </div>

                    <div class="form-group item row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Updated at *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <label class="col-form-label">{{$item->updated_at ==null ? "Chưa cập nhật" : $item->updated_at }}</label>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Description *</label>
                        <div class="col-md-7 col-sm-7 ">
                            <label class="col-form-label">{{$item->description}}</label>
                        </div>
                    </div>

                    <div class="item form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Image *</label>
                        <div class="col-md-6 col-sm-6 ">
                            <img class="thumbnail" src="{{$item->FirstImage}}" alt="">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Detail content *</label>
                        <div class="col-md-8 col-sm-8">
                            <label class="col-form-label">
                                {!! $item->detail !!}
                            </label>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/products"><button class="btn btn-primary" type="button">Back to list</button></a>
                            <a href="/admin/product/update/{{$item->id}}"><button class="btn btn-warning" type="button">Update</button></a>
                            <a href="/admin/product/delete/{{$item->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection

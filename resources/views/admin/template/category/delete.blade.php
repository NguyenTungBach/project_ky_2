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
                <form action="/admin/category/delete?id={{$items->id}}" method="post">
                @csrf
                    <div class="x_content">
                        <br/>
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Id *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$items->id}}</label>
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Name *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$items->name}}</label>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a href="{{url()->previous()}}"><button class="btn btn-primary" type="button">Back to list</button></a>
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

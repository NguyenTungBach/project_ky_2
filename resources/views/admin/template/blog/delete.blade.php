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
                <form action="/admin/blog/delete?id={{$items->id}}" method="post">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Tiêu đề *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$items->title}}</label>
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Mô tả *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$items->description}}</label>
                            </div>
                        </div>

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Ảnh *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <img src="{{$items->thumbnail}}" class="img-thumbnail" alt="">
                            </div>
                        </div>

                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Chi tiết *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{!! $items->content !!}</label>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-danger">Đồng ý xóa</button>
                                <a href="/admin/blogs"><button class="btn btn-primary" type="button">Quay về danh sách bài viết</button></a>
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

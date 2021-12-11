@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Xóa Bài Viết Sản Phẩm Nhà Vườn</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bạn có chắc muốn xóa trang trại có id ={{$item->id}}  này</h2>
                    <div class="clearfix"></div>
                </div>
                <form action="/admin/blog/farm/delete?id={{$item->id}}" method="post">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Tiêu đề bài viết *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$item->title}}</label>
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Nhà vườn *</label>
                            <div class="col-md-6 col-sm-6 ">
                                <label class="col-form-label">{{$item->farm->name}}</label>
                            </div>
                        </div>


                        <div class="item form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Ảnh *</label>
                            <div class="col-md-6 col-sm-6 ">
                                @foreach($item->arrayThumbnail as $thumbnail)
                                    <img src="{{$thumbnail}}" style="width: 30%" class="img-thumbnail" alt="">
                                @endforeach
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-danger">Đồng ý xóa</button>
                                <a href="/admin/blog/farms"><button class="btn btn-primary" type="button">Quay về danh sách trang trại</button></a>
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

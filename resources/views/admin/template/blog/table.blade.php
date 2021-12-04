@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Danh sách danh mục</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Danh mục sản phẩm</h2>
                    <div class="clearfix"></div>
                    @if(\Illuminate\Support\Facades\Session::has('message'))
                        <div style="margin-top: 15px">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>{{\Illuminate\Support\Facades\Session::get('message')}}</strong>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên bài viết</th>
                                        <th>Mô tả</th>
                                        <th>Chi tiết</th>
                                        <th>Ảnh bài viết</th>
                                        <th>Trạng thái</th>
                                        <th style="width: 7%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{!! $item->content !!}</td>
                                            <td><img src="{{$item->thumbnail}}" class="img-thumbnail" alt=""></td>
                                            @switch($item->status)
                                                @case(1)
                                                    <td>Chưa xóa</td>
                                                @break
                                                @case(0)
                                                <td>Đã xóa</td>
                                                @break
                                            @endswitch
                                            <td><a href="/admin/blog/{{$item->id}}" class="hover-pointer dataItem"
                                                >
                                                    <i class="fa fa-info mr-1 text-primary"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="Information"
                                                       data-original-title="Tooltip bottom"></i></a>

                                                <a href="/admin/blog/update/{{$item->id}}"
                                                   class="hover-pointer">
                                                    <i data-toggle="tooltip" data-placement="bottom" title=""
                                                       data-original-title="Edit"
                                                       class="fa fa-edit mr-1 text-primary"></i></a>
                                                <a href="/admin/blog/delete/{{$item->id}}" id="delete"
                                                   class="hover-pointer dataItem">
                                                    <i data-toggle="tooltip" data-placement="bottom" title=""
                                                       data-original-title="Delete"
                                                       class="fa fa-trash mr-1 text-primary"></i></a></td>
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
@endsection
@section('page-script')
@endsection

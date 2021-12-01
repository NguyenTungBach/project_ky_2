@extends('admin.master-admin')
@section('page-css')
    <style>
        .dataTables_paginate .pagination .active .text-pagination {
            color: #0e7aff !important;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Table Product</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Default Example</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <div class="col-md-12 col-sm-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </ul>

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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th style="width: 7%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td><img src="{{$item->firstImage}}" style="width: 75%" alt=""></td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->category_id}}</td>
                                            <td>{{$item->status}}</td>
                                            <td><a href="/admin/product/{{$item->id}}" class="hover-pointer dataItem"
                                                >
                                                    <i class="fa fa-info mr-1 text-primary"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="Information"
                                                       data-original-title="Tooltip bottom"></i></a>

                                                <a href="/admin/product/update/{{$item->id}}"
                                                   class="hover-pointer">
                                                    <i data-toggle="tooltip" data-placement="bottom" title=""
                                                       data-original-title="Edit"
                                                       class="fa fa-edit mr-1 text-primary"></i></a>
                                                <a href="/admin/product/delete/{{$item->id}}" id="delete"
                                                   class="hover-pointer dataItem">
                                                    <i data-toggle="tooltip" data-placement="bottom" title=""
                                                       data-original-title="Delete"
                                                       class="fa fa-trash mr-1 text-primary"></i></a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="datatable_info" role="status"
                                             aria-live="polite">Showing {{($items->currentPage() -1)* $limit + 1}} to {{($items->currentPage() -1)* $limit + $limit }} of {{$totalItem->count()}} items, total page {{$items->lastPage()}}
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate">
                                            {{$items->appends(request()->all())->links('admin.include.pagination')}}
                                        </div>
                                    </div>
                                </div>
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

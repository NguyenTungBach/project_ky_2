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
                    <div class="x_title">
                        <form action="/admin/product/search" method="get" id="form-search">
                            @csrf
                            <div class="col-sm-12 col-md-12">
                                {{--              Find By Name                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2  top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldName ?? ""}}" name="name"
                                           placeholder="Tên...">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--              Find By Category               --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="categories" id="category" class="form-control sortOrder">
                                        <option value="">---Lọc theo danh mục sản phẩm---</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                            {{isset($oldCategory) && $oldCategory == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--       Lọc theo tên      --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="nameSort" id="nameSort" class="form-control sortOrder">
                                        <option value="">---Lọc theo tên---</option>
                                        <option
                                            value="{{\App\Enums\Sort::Asc}}" {{isset($nameSort) && $nameSort == \App\Enums\Sort::Asc ? 'selected' : ''}}>
                                            Tên: A-Z
                                        </option>
                                        <option
                                            value="{{\App\Enums\Sort::Desc}}"
                                            {{isset($sortName) && $sortName == \App\Enums\Sort::Desc ? 'selected' : ''}}>
                                            Tên: Z-A
                                        </option>
                                    </select>
                                </div>
                                {{--                                --}}{{--        Sort price             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="priceSort" class="form-control sortOrder" id="priceSort">
                                        <option value="">---Lọc theo giá---</option>
                                        <option
                                            value="{{\App\Enums\Sort::Asc}}"
                                            {{isset($priceSort) && $priceSort == \App\Enums\Sort::Asc? 'selected' : ''}}>
                                            Giá: Thấp đến Cao
                                        </option>
                                        <option
                                            value="{{\App\Enums\Sort::Desc}}"
                                            {{isset($priceSort) && $priceSort == \App\Enums\Sort::Desc? 'selected' : ''}}>
                                            Giá: Cao đến Thấp
                                        </option>
                                    </select>
                                </div>
                                {{--                                --}}{{--        Search status             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="status" class="form-control" id="status">
                                        <option value="">---Trạng thái---</option>
                                        <option value="1"{{isset($status) && $status == 1 ? 'selected' : ''}}>Còn hàng</option>
                                        <option value="2"{{isset($status) && $status == 2 ? 'selected' : ''}}>Hết hàng</option>
                                        <option value="0"{{isset($status) && $status == 0 ? 'selected' : ''}}>Đã xóa</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="price" class="form-control sortOrder" id="price">
                                        <option value="">---Tổng giá (VND)---</option>
                                        <option
                                            value="1" {{isset($oldPrice) && $oldPrice == 1 ? 'selected' : ''}}>
                                            Từ 0 - 100,000
                                        </option>
                                        <option
                                            value="2" {{isset($oldPrice) && $oldPrice == 2 ? 'selected' : ''}}>
                                            Từ 100,000 - 200,000
                                        </option>
                                        <option
                                            value="3" {{isset($oldPrice) && $oldPrice == 3 ? 'selected' : ''}}>
                                            Từ 100,000 - 200,000
                                        </option>
                                        <option
                                            value="4" {{isset($oldPrice) && $oldPrice == 4 ? 'selected' : ''}}>
                                            Từ 200,000 - 300,000
                                        </option>
                                        <option
                                            value="5" {{isset($oldPrice) && $oldPrice == 5 ? 'selected' : ''}}>
                                            Từ 300,000 - 400,000
                                        </option>
                                        <option
                                            value="6" {{isset($oldPrice) && $oldPrice == 6 ? 'selected' : ''}}>
                                            Đơn hàng trên 500,000
                                        </option>
                                    </select>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>

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
    <script>
        $(document).ready(function() {
            $('.icon-search').on('click', function () {
                $('#form-search').submit();
            })
            $('.delete-search').on('click', function () {
                $(this).siblings().val('')
            })
            $('#category').change(function () {
                this.form.submit();
            })
            $('#nameSort').change(function () {
                this.form.submit();
            })
            $('#priceSort').change(function () {
                this.form.submit();
            })
            $('#status').change(function () {
                this.form.submit();
            })
            $('#price').change(function () {
                this.form.submit();
            })
        });
    </script>
@endsection

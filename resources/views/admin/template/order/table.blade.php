@extends('admin.master-admin')
@section('page-css')
    {{--    date picker--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <link rel="stylesheet" href="/admin/css/admin.css">

@endsection
@section('breadcrumb')
    <div class="page-title position-relative">
        {{--        <div class="position-absolute message-update"><i style="font-size: 18px" class="fa fa-check"></i> Cập nhật trạng thái giỏ hàng thành công</div>--}}
        <div class="title_left">
            <h3>Danh sách hoá đơn đặt hàng</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title position-relative">
                    <div id="menu-table" class="position-fixed">
                        <ul style="display: flex">
                            <li>
                                <div>
                                    <i class="fa fa-check-circle"></i>
                                    <span class="data-quantity-choice">Đã chọn : 0</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-edit"></i>
                                    <div class="dropdown">
                                        <span>Update status</span>
                                        <div class="dropdown-content">
                                            <ul style="padding: 0;" class="ids-update-choice" data-id="0">
                                                <li class="update-status-choice" data-status="2">
                                                    <span>Chờ xác nhận</span></li>
                                                <li class="update-status-choice" data-status="3"><span>Đang xử lí</span>
                                                </li>
                                                <li class="update-status-choice" data-status="1">
                                                    <span>Đã giao hàng</span></li>
                                                <li class="update-status-choice" data-status="0"><span>Huỷ đơn</span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="delete-all" data-toggle="modal" data-target="#exampleModal">
                                <div class="position-relative">
                                    <i class="fa fa-trash"></i>
                                    <span>Xoá</span>
                                </div>
                            </li>
                            <form name="export-order" action="/admin/order/export" method="post">
                                @csrf
                                <li id="download-order">
                                    <input type="hidden" name="ids">
                                    <div>
                                        <i class="fa fa-download"></i>
                                        <span>Tải xuống</span>
                                    </div>
                                </li>
                            </form>
                            <li class="check-all">
                                <div>
                                    <i class="fa fa-th-list"></i>
                                    <span>Chọn tất cả</span>
                                </div>
                            </li>
                            <li class="clear-check-all">
                                <div>
                                    <i class="fa fa-times-circle"></i>
                                    <span>Bỏ chọn tất cả</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h2 class="col-sm-12 col-md-12">Lọc hoá đơn</h2>
                    <div class="x_title">
                        <form action="/admin/order/search" method="get" id="form-search">
                            @csrf
                            <div class="col-sm-12 col-md-12">
                                {{--              Find By Name                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2  top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldName ?? ""}}" name="name"
                                           placeholder="Tên khách hàng">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--              Find By Phone                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldPhone ?? ""}}" name="phone"
                                           placeholder="Số điện thoại">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--              Find By Email                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldEmail ?? ""}}" name="email"
                                           placeholder="Email">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--              Find By Id                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldId ?? ""}}" name="id"
                                           placeholder="Mã đơn hàng">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
{{--                                              Find By Product name--}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    <input type="text" class="form-control query"
                                           value="{{$oldNameProduct ?? ""}}" name="nameProduct"
                                           placeholder="Tên sản phẩm">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
{{--                                       Lọc theo tên      --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="sortName" class="form-control sortOrder">
                                        <option value="">Lọc theo tên</option>
                                        <option
                                            value="{{\App\Enums\Sort::Asc}}"
                                            {{isset($sortName) && $sortName == \App\Enums\Sort::Asc ? 'selected' : ''}}>
                                            Tên: A-Z
                                        </option>
                                        <option
                                            value="{{\App\Enums\Sort::Desc}}"
                                            {{isset($sortName) && $sortName == \App\Enums\Sort::Desc ? 'selected' : ''}}>
                                            Tên: Z-A
                                        </option>
                                    </select>
                                </div>
                                {{--        Sort price             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="sortPrice" class="form-control sortOrder" id="">
                                        <option value="">Lọc theo giá</option>
                                        <option
                                            value="{{\App\Enums\Sort::Asc}}"
                                            {{isset($sortPrice) && $sortPrice == \App\Enums\Sort::Asc? 'selected' : ''}}>
                                            Giá: Thấp đến Cao
                                        </option>
                                        <option
                                            value="{{\App\Enums\Sort::Desc}}"
                                            {{isset($sortPrice) && $sortPrice == \App\Enums\Sort::Desc? 'selected' : ''}}>
                                            Giá: Cao đến Thấp
                                        </option>
                                    </select>
                                </div>
                                {{--        Search status             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="status" class="form-control" id="select-category">
                                        <option value="">Trạng thái</option>
                                        <option
                                            value="{{\App\Enums\OrderStatus::Cancel}}"
                                            {{isset($oldStatus) && $oldStatus == (\App\Enums\OrderStatus::Cancel)? 'selected' : ''}}>
                                            Đã huỷ
                                        </option>
                                        <option
                                            value="{{\App\Enums\OrderStatus::Done}}"
                                            {{isset($oldStatus) && $oldStatus == (\App\Enums\OrderStatus::Done)? 'selected' : ''}}>
                                            Đã giao hàng
                                        </option>
                                        <option
                                            value="{{\App\Enums\OrderStatus::Waiting}}"
                                            {{isset($oldStatus) && $oldStatus == (\App\Enums\OrderStatus::Waiting)? 'selected' : ''}}>
                                            Chờ xác nhận
                                        </option>
                                        <option
                                            value="{{\App\Enums\OrderStatus::Processing}}"
                                            {{isset($oldStatus) && (\App\Enums\OrderStatus::Processing) == $oldStatus? 'selected' : ''}}>
                                            Đang xử lý
                                        </option>
                                        <option
                                            value="{{\App\Enums\OrderStatus::Deleted}}"
                                            {{isset($oldStatus) && $oldStatus == (\App\Enums\OrderStatus::Deleted)? 'selected' : ''}}>
                                            Đã xoá
                                        </option>
                                    </select>
                                </div>
                                {{--       Thanh toán                          --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="payment" class="form-control sortOrder" id="">
                                        <option value="">Thanh toán</option>
                                        <option
                                            value="0" {{isset($oldPayment) && $oldPayment == 0 ? 'selected' : ''}}>
                                            Chưa thanh toán
                                        </option>
                                        <option
                                            value="1" {{isset($oldPayment) && $oldPayment == 1 ? 'selected' : ''}}>
                                            Đã thanh toán
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="created_at" class="form-control sortOrder" id="">
                                        <option value="">Lọc theo thời gian</option>
                                        <option
                                            value="{{\App\Enums\Sort::Asc}}"
                                            {{isset($oldCreated_at) && $oldCreated_at == \App\Enums\Sort::Asc ? 'selected' : ''}}>
                                            Cũ nhất đến mới nhất
                                        </option>
                                        <option
                                            value="{{\App\Enums\Sort::Desc}}"
                                            {{isset($oldCreated_at) && $oldCreated_at == \App\Enums\Sort::Desc ? 'selected' : ''}}>
                                            Mới nhất đến cũ nhất
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="totalPrice" class="form-control sortOrder" id="">
                                        <option value="">Tổng giá (VND)</option>
                                        <option
                                            value="1" {{isset($oldTotalPrice) && $oldTotalPrice == 1 ? 'selected' : ''}}>
                                            Từ 0 - 100,000
                                        </option>
                                        <option
                                            value="2" {{isset($oldTotalPrice) && $oldTotalPrice == 2 ? 'selected' : ''}}>
                                            Từ 100,000 - 200,000
                                        </option>
                                        <option
                                            value="3" {{isset($oldTotalPrice) && $oldTotalPrice == 3 ? 'selected' : ''}}>
                                            Từ 100,000 - 200,000
                                        </option>
                                        <option
                                            value="4" {{isset($oldTotalPrice) && $oldTotalPrice == 4 ? 'selected' : ''}}>
                                            Từ 200,000 - 300,000
                                        </option>
                                        <option
                                            value="5" {{isset($oldTotalPrice) && $oldTotalPrice == 5 ? 'selected' : ''}}>
                                            Từ 300,000 - 400,000
                                        </option>
                                        <option
                                            value="6" {{isset($oldTotalPrice) && $oldTotalPrice == 6 ? 'selected' : ''}}>
                                            Đơn hàng trên 500,000
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    @php
                                    use Carbon\Carbon;
                                    if (isset($oldStartDate) && isset($oldEndDate)){
                                        $oldStartDate = Carbon::parse($oldStartDate)->isoFormat('MM/DD/YYYY');
                                        $oldEndDate = Carbon::parse($oldEndDate)->isoFormat('MM/DD/YYYY');
                                    }
                                    @endphp
                                    <input type="hidden" name="startDate" id="startDate"
                                           value="{{$oldStartDate ?? ''}}">
                                    <input type="hidden" name="endDate" id="endDate" value="{{$oldEndDate ?? ''}}">

                                    <input id="picker" style="cursor: pointer ;background-color: #FFFFFF"
                                           class=" form-control query"
                                           value="{{isset($oldStartDate) && isset($oldEndDate) ? $oldStartDate ." - ". $oldEndDate : '' }}"
                                           placeholder="Search by date...">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i
                                            class="fa fa-search"></i></span>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            @if(\Illuminate\Support\Facades\Session::has('message'))
                                <div style="margin-top: 15px">
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>{{\Illuminate\Support\Facades\Session::get('message')}}</strong>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12 ">

                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" value="" class="check-all-order" name="selected-all">
                                        </th>
                                        <th>Mã đơn hàng</th>
                                        <th>Trạng thái</th>

                                        <th>Tên</th>
                                        <th>Số điên thoại</th>
                                        <th>Email</th>
                                        <th>Thanh toán</th>
                                        <th style="width: 10%">Ngày đặt hàng</th>
                                        <th>Tổng giá(VND)</th>
                                        <th style="width: 8%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td><input type="checkbox" value="{{$item->id}}" class="selected-item">
                                            <td>{{$item->id}}</td>
                                            <form action="/admin/order/update/status" method="post">
                                                @include('admin.template.order.status-select')
                                            </form>

                                            <td>{{$item->ship_name}}</td>
                                            <td>{{$item->ship_phone}}</td>
                                            <td>{{$item->ship_email}}</td>
                                            <td>{{$item->handlerPayment}}</td>
                                            <td>{{ $item->created_at}}</td>

                                            <td>{{number_format($item['total_price'])}} VNĐ</td>

                                            <td><a href="/admin/order/detail/{{$item->id}}" class="hover-pointer dataItem">

                                                    <i class="fa fa-info mr-1 text-primary"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="Information"
                                                       data-original-title="Tooltip bottom"></i></a>
{{--                                                <a href="/admin/order/delete/{{$item->id}}" id="delete"--}}
{{--                                                   class="hover-pointer dataItem"--}}
{{--                                                   data-toggle="modal"--}}
{{--                                                   data-target="#deleteModal"--}}
{{--                                                   data-name="{{$item->name}}"--}}
{{--                                                   data-id="{{$item->id}}">--}}
{{--                                                    <i data-toggle="tooltip" data-placement="bottom" title=""--}}
{{--                                                       data-original-title="Delete"--}}
{{--                                                       class="fa fa-trash mr-1 text-primary"></i></a></td>--}}

                                        </tr>
                                    @endforeach

                                    <tr style="font-size: 16px;font-weight: 600;">
                                        <td colspan="8">
                                            Tổng giá tiền
                                        </td>
                                        <td colspan="2">{{number_format($items->getCollection()->sum('total_price'))}}
                                            <span
                                                style="font-weight: 6000; font-size: 13px">VND</span></td>
                                    </tr>

                                    </tbody>

                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="datatable_info" role="status"
                                         aria-live="polite">
                                        Hiển thị 1 đến {{$paginate ?? ''}} trong tổng số {{$sumOrder ?? ''}} hoá đơn
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
        <!-- Modal xác nhận xoá tất cả order đã chọn-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xoá các hoá đơn đã chọn?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button data-id="0" id="confirm-delete-all" type="button" class="btn btn-primary">Đồng ý
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('page-script')
    {{--    date picker--}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="/js/jquery.toast.min.js"></script>
    <script src="/admin/js/admin.js"></script>
    <script>
        //============================= Handler Checked Order ================================================================
        let body = $('body');
        const selectItem = $('.selected-item');
        let hrefDeleteAll = $('#deleteAll').attr('href');
        let hrefUpdateAll = $('#updateAll').attr('href');

        // xử lý check all
        $('input[name="selected-all"]').on('click', function () {
            let ids = new Set();
            selectItem.prop('checked', this.checked);
            if (this.checked) {
                $('#menu-table').css('display', 'flex')
                for (const ele of selectItem) {
                    ids.add(ele.value);
                }
                $('#confirm-delete-all').data('id', ids)
                $('.ids-update-choice').data('id', ids)
                $('input[name=ids]').val(Array.from(ids))
                //hiển thị số lượng đã chon trên menu xử lý nhiều order 1 lúc
                $('.data-quantity-choice').text(`Đã chọn: ${ids.size}`)
            } else {
                $('#deleteAll').attr('href', hrefDeleteAll);
                $('#updateAll').attr('href', hrefUpdateAll);
                $('#menu-table').css('display', 'none');
            }
        })

        // xử lý check từng order
        selectItem.on('click', function () {
            let ids = new Set();
            let value = this.value;
            for (let i = 0; i < selectItem.length; i++) {
                if (selectItem[i].checked) {
                    ids.add(selectItem[i].value);
                }
            }
            if ($(this).prop('checked')) {
                $('#menu-table').css('display', 'flex');
                ids.add(value);
            } else {

                if (ids.has(value)) {
                    ids.delete(value);
                }
                if (ids.size === 0) {
                    $('#menu-table').css('display', 'none');
                }
            }

            if (ids.size > 0) {
                $('#confirm-delete-all').data('id', ids)
                $('.ids-update-choice').data('id', ids)
                $('input[name=ids]').val(Array.from(ids))

                //hiển thị số lượng đã chon trên menu xử lý nhiều order 1 lúc
                $('.data-quantity-choice').text(`Đã chọn: ${ids.size}`)

            } else {
                $('#confirm-delete-all').data('id', '')
                $('.ids-update-choice').data('id', '')
                $('input[name=ids]').val([])

            }
        })
        //============================================ Download tất cả order đã chọn ==================================================
        body.on('click', '#download-order', function () {
            $('form[name=export-order]').submit();

        })

        //============================================ Bỏ chọn tất cả ==================================================
        body.on('click', '.clear-check-all', function () {
            selectItem.attr('checked', false)
            $('.check-all-order').attr('checked', false)
        })
        //============================================  chọn tất cả ==================================================
        body.on('click', '.check-all', function () {
            selectItem.prop('checked', 'checked')
            $('.check-all-order').prop('checked', 'checked')
        })
        // ======================================== Update status tat ca order da chon ==============================
        body.on('click', '.update-status-choice', function () {
            let ids = Array.from($(this).parent().data('id'));
            let status = $(this).data('status');
            let data = {
                ids: ids,
                status: status
            }

            $.ajax({
                url: 'http://127.0.0.1:8000/admin/order/update-multi/status',
                type: 'POST',
                data: JSON.stringify(data),

                success: function (data) {
                    console.log(JSON.parse(data))
                    $.toast({
                        heading: 'Success',
                        text: 'Cập nhật trạng thái hoá đơn thành công',
                        showHideTransition: 'slide',
                        icon: 'success',
                        position: 'top-right'
                    })
                    setTimeout(function () {
                        window.location.reload(false);
                    }, 3000);
                },
                error: function (request, error) {
                    console.log("Request: " + JSON.parse(request));

                    function messageError() {
                        $.toast({
                            heading: 'Error',
                            text: 'Cập nhật giỏ hàng thất bại',
                            icon: 'error',

                        });
                    }
                }
            });
        });

        // ======================================== Xoa tat ca order da chon ==============================
        body.on('click', '#confirm-delete-all', function () {
            $('#exampleModal').css('display', 'none');
            let listId = Array.from($(this).data('id'));
            let data = {
                ids: listId
            };
            console.log(listId)
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/order/remove-multi/status',
                type: 'POST',
                data: JSON.stringify(data),

                success: function (data) {
                    $.toast({
                        heading: 'Success',
                        text: 'Xoá thành công hoá đơn',
                        showHideTransition: 'slide',
                        icon: 'success',
                        position: 'top-right'
                    })
                    setTimeout(function () {
                        window.location.reload(false);
                    }, 3000);
                },
                error: function (request, error) {
                    console.log("Request: " + JSON.parse(request));
                    messageError();
                }
            });
        })
    </script>

@endsection


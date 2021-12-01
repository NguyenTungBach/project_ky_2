@extends('admin.master-admin')
@section('page-css')
    {{--    date picker--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .dataTables_paginate .pagination .active .text-pagination {
            color: #0e7aff !important;
        }
        .sortOrder {
            color: #495057 !important;
        }

        .btn-price {
            background-color: #20b426;
            padding: 3px;
            border-radius: 7px;
            color: #FFFFFF;
        }

        .fa-sort-amount-desc {
            cursor: pointer;
        }

        .bs-glyphicons-list li span {
            float: left;
            font-size: 16px;
        }

        .bs-glyphicons-list li i {
            color: #000;
            float: left;
            margin-right: 20px;
            font-size: 20px;
        }

        .bs-glyphicons-list li {
            display: flex;
            align-items: baseline;
            width: 20%;
            height: auto;
            background-color: #ececec;

        }

        .bs-glyphicons-list a:hover {
            background-color: #c4dcf4;
            color: #FFF;
        }

        .bs-glyphicons-list li:hover {
            background-color: #c4dcf4;
            color: #FFF;
        }


        .status-order div {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 8px;
        }

        .checkOut-order div {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 8px;
        }

        #menu-table {
            display: none;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Table Order</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2 class="col-sm-12 col-md-12">Order Manager</h2>
                    <div class="x_title">
                        <form action="/admin/order/search" method="get" id="form-search">
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
                                {{--              Find By Phone                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldPhone ?? ""}}" name="phone"
                                           placeholder="Số điện thoại...">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--              Find By Email                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldEmail ?? ""}}" name="email"
                                           placeholder="Email...">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--              Find By Id                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldId ?? ""}}" name="id"
                                           placeholder="Mã đơn hàng...">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--       Lọc theo tên      --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="sortName" class="form-control sortOrder">
                                        <option value="">---Lọc theo tên---</option>
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
                                {{--                                --}}{{--        Sort price             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="sortPrice" class="form-control sortOrder" id="">
                                        <option value="">---Lọc theo giá---</option>
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
                                {{--                                --}}{{--        Search status             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="status" class="form-control" id="select-category">
                                        <option value="">---Trạng thái---</option>
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
                                        <option value="">---Thanh toán---</option>
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
                                        <option value="">---Lọc theo thời gian----</option>
                                        <option
                                            value="{{\App\Enums\Sort::Asc}}"
                                            {{isset($oldCreated_at) && $oldCreated_at == \App\Enums\Sort::Asc ? 'selected' : ''}}>
                                            Mới nhất đến muộn nhất
                                        </option>
                                        <option
                                            value="{{\App\Enums\Sort::Desc}}"
                                            {{isset($oldCreated_at) && $oldCreated_at == \App\Enums\Sort::Desc ? 'selected' : ''}}>
                                            Muộn nhất đến mới nhất
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="totalPrice" class="form-control sortOrder" id="">
                                        <option value="">---Tổng giá (VND)---</option>
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
                                       $startCarbon = Carbon::now('Asia/Ho_Chi_Minh')->subDay(30)->isoFormat('MM/DD/YYYY');
                                       $endCarbon = Carbon::now('Asia/Ho_Chi_Minh')->isoFormat('MM/DD/YYYY');
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
                        </form>
                    </div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" value="" name="selected-all"></th>
                                        <th>Mã đơn hàng</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng giá(VND)</th>
                                        <th>Tên</th>
                                        <th>Số điên thoại</th>
                                        <th>Email</th>
                                        <th>Thanh toán</th>
                                        <th style="width: 10%">Ngày đặt hàng</th>
                                        <th style="width: 7%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td><input type="checkbox" value="{{$item->id}}" class="selected-item">
                                            <td>{{$item->id}}</td>
                                            <form action="" method="post">
                                                @include('admin.template.order.status-select')
                                            </form>
                                            <td>{{number_format($item['total_price'])}}</td>
                                            <td>{{$item->ship_name}}</td>
                                            <td>{{$item->ship_phone}}</td>
                                            <td>{{$item->ship_email}}</td>
                                            <td>{{$item->handlerPayment}}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td><a href="/admin/order/{{$item->id}}" class="hover-pointer dataItem"
                                                >
                                                    <i class="fa fa-info mr-1 text-primary"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="Information"
                                                       data-original-title="Tooltip bottom"></i></a>

                                                <a href="/admin/order/update/{{$item->id}}"
                                                   class="hover-pointer">
                                                    <i data-toggle="tooltip" data-placement="bottom" title=""
                                                       data-original-title="Edit"
                                                       class="fa fa-edit mr-1 text-primary"></i></a>
                                                <a href="/admin/order/delete/{{$item->id}}" id="delete"
                                                   class="hover-pointer dataItem"
                                                   data-toggle="modal"
                                                   data-target="#deleteModal"
                                                   data-name="{{$item->name}}"
                                                   data-id="{{$item->id}}">
                                                    <i data-toggle="tooltip" data-placement="bottom" title=""
                                                       data-original-title="Delete"
                                                       class="fa fa-trash mr-1 text-primary"></i></a></td>

                                        </tr>
                                    @endforeach
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
    </div>
@endsection
@section('page-script')
    {{--    date picker--}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        $(document).ready(function() {
            {{--  Form search       --}}
            $('.delete-search').on('click', function () {
                $(this).siblings().val('')
            })
            // id form category admin
            $('#delete-cate').on('click', function () {
                $(this).siblings().val('')
            })
            $('.icon-search').on('click', function () {
                $('#form-search').submit();
            })
            $('.sortOrder').change(function () {
                this.form.submit();
            })
            $('.sortProduct').change(function () {
                this.form.submit();
            })
            $('#select-category').change(function () {
                this.form.submit();
            })
            {{--================       date picker flatpick========================================== --}}

            $('#picker').daterangepicker({
                    opens: 'left'
                }
                , function (startDate, endDate, label) {
                    $('#startDate').val(startDate.format('YYYY-MM-DD'))
                    $('#endDate').val(endDate.format('YYYY-MM-DD'))
                });
        });
            //=========================== update status =========================================
        $('.status-update').change(function () {
            let id = $(this).data('id');
            let status = $('select[name=status-update]').val();
            let data = {
                id: id,
                status: status
            }
            $.ajax({
                url: `http://127.0.0.1:8000/admin/order/update/status`,
                method: 'POST',
                data: JSON.stringify(data),
                success: function (response) {
                    message();
                    console.log(response)
                },

            });

        })

        function message() {
            $.toast({
                icon: 'success',
                heading: 'Thành công',
                text: 'Cập nhật trạng thái thành công.',
                bgColor: '#81b03f',
                textColor: 'white',
                position: 'top-right',
            })
        }
    </script>
    <script>
        //============================= Handler Checked product ================================================================
        const selectItem = $('.selected-item')
        let hrefDeleteAll = $('#deleteAll').attr('href');
        let hrefUpdateAll = $('#updateAll').attr('href');


        $('input[name="selected-all"]').on('click', function () {
            let arr = new Set();
            selectItem.prop('checked', this.checked);

            if (this.checked) {
                $('#menu-table').css('display', 'block')
                for (const ele of selectItem) {
                    arr.add(ele.value);
                }

                $('#deleteAll').attr('href', hrefDeleteAll + Array.from(arr).join(','))
                $('#updateAll').attr('href', hrefUpdateAll + Array.from(arr).join(','))
                $('#numberChoice').text(selectItem.length + " select")

            } else {
                $('#deleteAll').attr('href', hrefDeleteAll)
                $('#updateAll').attr('href', hrefUpdateAll)
                $('#menu-table').css('display', 'none')
            }
        })

        selectItem.on('click', function () {
            let arr = new Set();
            let value = this.value;
            for (let i = 0; i < selectItem.length; i++) {
                if (selectItem[i].checked) {
                    arr.add(selectItem[i].value)
                }
            }
            if ($(this).prop('checked')) {
                $('#menu-table').css('display', 'block')
                arr.add(value);
            } else {
                if (arr.has(value)) {
                    arr.delete(value)
                }
                if (arr.size === 0) {
                    $('#menu-table').css('display', 'none')
                }
            }

            if (arr.size > 0) {
                $('#deleteAll').attr('href', hrefDeleteAll + Array.from(arr).join(','))
                $('#updateAll').attr('href', hrefUpdateAll + Array.from(arr).join(','))
            } else {
                $('#deleteAll').attr('href', hrefDeleteAll)
                $('#updateAll').attr('href', hrefUpdateAll)
            }
        })
    </script>
@endsection


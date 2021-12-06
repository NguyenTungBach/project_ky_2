@extends('admin.master-admin')
@section('page-css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .dataTables_paginate .pagination .active .text-pagination {
            color: #0e7aff !important;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Danh sách phản hồi</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel position-relative">
                <div class="x_title">
                    <div id="menu-table" style="width: 300px" class="position-fixed">
                        <ul style="display: flex">
                            <li>
                                <div>
                                    <i class="fa fa-check-circle"></i>
                                    <span class="data-quantity-choice">Đã chọn : 1</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-edit"></i>
                                    <div class="dropdown">
                                        <span>Đổi trạng thái</span>
                                        <div class="dropdown-content">
                                            <ul style="padding: 0;" class="ids-update-choice" data-id="0">
                                                <li class="update-status-choice" data-status="1">
                                                    <span>Chưa đọc</span>
                                                </li>
                                                <li class="update-status-choice" data-status="2">
                                                    <span>Đã đọc</span>
                                                </li>
                                                <li class="update-status-choice" data-status="0">
                                                    <span>Đã xoá</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h5>Lọc phản hồi</h5>
                    <div class="x_title">
                        <form action="/admin/contact/search" method="get" id="form-search">
                            @csrf
                            <div class="col-sm-12 col-md-12">
                                {{--              Find By Name                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2  top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldName ?? ""}}" name="name"
                                           placeholder="Tên người gửi...">
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
                                {{--                                --}}{{--        Search status             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="status" class="form-control sortOrder" id="status">
                                        <option value="">---Trạng thái---</option>
                                        <option value="1"{{isset($status) && $status == 1 ? 'selected' : ''}}>Chưa đọc</option>
                                        <option value="2"{{isset($status) && $status == 2 ? 'selected' : ''}}>Đã đọc</option>
                                        <option value="0"{{isset($status) && $status == 0 ? 'selected' : ''}}>Đã xóa</option>
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
                                        <th><input type="checkbox" value="" class="check-all-order" name="selected-all">
                                        <th>Mã</th>
                                        <th>Tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Trạng thái</th>
                                        <th style="width: 5%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td><input type="checkbox" value="{{$item->id}}" class="selected-item">
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>
                                                <form action="/admin/contact/update/status" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$item->id}}" name="id">
                                                    @include('admin.template.contact.status')
                                                </form>
                                            </td>
                                            <td class="text-center"><a href="/admin/contact/detail/{{$item->id}}" class="hover-pointer dataItem">
                                                    <i style="font-size: 18px" class="fa fa-info-circle mr-1 text-primary"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="Information"
                                                       data-original-title="Tooltip bottom"></i></a>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="datatable_info" role="status"
                                             aria-live="polite">Hiển thị 1 tới {{$paginate ?? ''}} trong số {{$sum?? ''}} sản phẩm
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
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        let body = $('body');
        const selectItem = $('.selected-item');
        var dem = 0;
        // xử lý check all
        $('input[name="selected-all"]').on('click', function () {
            let ids = new Set();
            selectItem.prop('checked', this.checked); // cho tất cả đều được check như selected-all
            if (this.checked) {
                $('#menu-table').css('display', 'flex');
                for (const ele of selectItem) {
                    ids.add(ele.value);
                }
                console.log(ids);
                $('.data-quantity-choice').text("Đã chọn: "+ids.size);
                // for (const ele of selectItem) {
                //     ids.add(ele.value);
                // }
                // $('#confirm-delete-all').data('id', ids)
                $('.ids-update-choice').data('id', ids)
                // $('input[name=ids]').val(Array.from(ids))
                // //hiển thị số lượng đã chon trên menu xử lý nhiều order 1 lúc
                // $('.data-quantity-choice').text(`Đã chọn: ${ids.size}`)
            } else {
                // $('#deleteAll').attr('href', hrefDeleteAll);
                // $('#updateAll').attr('href', hrefUpdateAll);
                $('#menu-table').css('display', 'none');
            }
        });
        // xử lý check từng order
        selectItem.on('click', function () {
            let ids = new Set();
            let value = this.value;
            for (let i = 0; i < selectItem.length; i++) { // Kiểm tra từng selectItem
                if (selectItem[i].checked) { // Nếu có selectItem được check
                    ids.add(selectItem[i].value); // thì đưa vào Set
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
            console.log(ids);
            if (ids.size > 0) {
                $('#confirm-delete-all').data('id', ids)
                $('.ids-update-choice').data('id', ids)
                $('input[name=ids]').val(Array.from(ids))
                console.log("Data-id la:", $('.ids-update-choice').data('id'));
                //hiển thị số lượng đã chon trên menu xử lý nhiều order 1 lúc
                $('.data-quantity-choice').text(`Đã chọn: ${ids.size}`)
            } else {
                $('#confirm-delete-all').data('id', '')
                $('.ids-update-choice').data('id', '')
                $('input[name=ids]').val([])
            }
        })

        // ======================================== Update status tat ca order da chon ==============================
        body.on('click', '.update-status-choice', function () {
            let ids = Array.from( $(this).parent().data('id') ); // Lấy giá trị thuộc tính data-id
            console.log(ids);
            let status = $(this).data('status');
            console.log("trạng thái cập nhật: ", status);
            let data = {
                ids: ids,
                status: status
            }

            $.ajax({
                url: 'http://127.0.0.1:8000/admin/contact/update-multi/status',
                type: 'POST',
                data: JSON.stringify(data),
                success: function (data) {
                    console.log("console log thư thành công: ",JSON.parse(data))
                    $.toast({
                        heading: 'Success',
                        text: 'Cập nhật trạng thái thư thành công',
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
                            text: 'Cập nhật trạng thái thư thất bại',
                            icon: 'error',
                        });
                    }
                }
            });
        });

    </script>
    <script>
        $('.delete-search').on('click', function () {
            $(this).siblings().val('')
        })
        $('.icon-search').on('click', function () {
            $('#form-search').submit();
        })
        $('#status').change(function () {
            this.form.submit();
        })
    </script>
@endsection

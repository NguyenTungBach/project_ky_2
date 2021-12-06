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
            <h3>Danh sách khách hàng</h3>
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
                            <li class="delete-all" data-toggle="modal" data-target="#exampleModal">
                                <div class="position-relative">
                                    <i class="fa fa-trash"></i>
                                    <span>Xoá</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h5>Lọc khách hàng</h5>
                    <div class="x_title">
                        <form action="/admin/user/search" method="get" id="form-search">
                            @csrf
                            <div class="col-sm-12 col-md-12">
                                {{--              Find By Name                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2  top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldName ?? ""}}" name="name"
                                           placeholder="Tên khách...">
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
                                        <option value="1"{{isset($status) && $status == 1 ? 'selected' : ''}}>Tồn tại</option>
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
                                        <th style="width: 8%">Hành động</th>
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
                                                <form action="/admin/user/update/status" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$item->id}}" name="id">
                                                    <select name="status-update" class="status-update" data-id="{{$item->id}}" style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd" >
                                                        <option value="0" {{$item->status == \App\Enums\UserStatus::Deleted ? 'selected' : ''}}>Đã xóa</option>
                                                        <option value="1" {{$item->status == \App\Enums\UserStatus::Existed ? 'selected' : ''}}>Đã kích hoạt</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="/admin/user/detail/{{$item->id}}" class="hover-pointer dataItem">
                                                    <i style="font-size: 16px" class="fa fa-info-circle mr-1 text-primary"
                                                       data-toggle="tooltip" data-placement="bottom"
                                                       title="Information"
                                                       data-original-title="Tooltip bottom"></i></a>
                                                <a href="/admin/user/update/{{$item->id}}"
                                                   class="hover-pointer">
                                                    <i  style="font-size: 16px" data-toggle="tooltip" data-placement="bottom" title=""
                                                       data-original-title="Edit"
                                                       class="fa fa-edit mr-1 text-primary"></i></a>
{{--                                                <a href="/admin/user/delete/{{$item->id}}" id="delete"--}}
{{--                                                   class="hover-pointer dataItem">--}}
{{--                                                    <i data-toggle="tooltip" data-placement="bottom" title=""--}}
{{--                                                       data-original-title="Delete"--}}
{{--                                                       class="fa fa-trash mr-1 text-primary"></i></a></td>--}}
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
                                    <!-- Modal xác nhận xoá tất cả order đã chọn-->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xoá các khách hàng đã chọn?</h5>
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
                // for (const ele of selectItem) {
                //     ids.add(ele.value);
                // }
                $('#confirm-delete-all').data('id', ids)
                // $('.ids-update-choice').data('id', ids)
                // $('input[name=ids]').val(Array.from(ids))
                // //hiển thị số lượng đã chon trên menu xử lý nhiều order 1 lúc
                $('.data-quantity-choice').text("Đã chọn: "+ids.size);
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
                // $('.ids-update-choice').data('id', ids)
                // $('input[name=ids]').val(Array.from(ids))
                console.log("Data-id la:", $('#confirm-delete-all').data('id'));
                //hiển thị số lượng đã chon trên menu xử lý nhiều order 1 lúc
                $('.data-quantity-choice').text(`Đã chọn: ${ids.size}`)
            } else {
                $('#confirm-delete-all').data('id', '')
                // $('.ids-update-choice').data('id', '')
                // $('input[name=ids]').val([])
            }
        })

        // ======================================== Xoa tat ca order da chon ==============================
        body.on('click', '#confirm-delete-all', function () {
            $('#exampleModal').css('display', 'none');
            let listId = Array.from($(this).data('id'));
            let data = {
                ids: listId
            };
            console.log(listId)
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/user/remove-multi/status',
                type: 'POST',
                data: JSON.stringify(data),

                success: function (data) {
                    $.toast({
                        heading: 'Success',
                        text: 'Xoá các khách chọn thành công ',
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

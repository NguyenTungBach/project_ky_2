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
            <h3>Danh sách sản phẩm</h3>
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
                                                    <span>Đang bán</span>
                                                </li>
                                                <li class="update-status-choice" data-status="2">
                                                    <span>Hết hàng</span>
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
                    <h5>Lọc sản phẩm</h5>
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
                                    <select name="farms" id="farm" class="form-control sortOrder">
                                        <option value="">---Lọc theo trang trại---</option>
                                        @foreach($farms as $farm)
                                            <option value="{{$farm->id}}"
                                            {{isset($oldFarm) && $oldFarm == $farm->id ? 'selected' : ''}}>{{$farm->name}}</option>
                                        @endforeach
                                    </select>
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
                                        <option value="0">---Lọc theo tên---</option>
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
                                        <option value="0">---Lọc theo giá---</option>
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
                                    <select name="status" class="form-control sortOrder" id="status">
                                        <option value="">---Trạng thái---</option>
                                        <option value="1"{{isset($status) && $status == 1 ? 'selected' : ''}}>Đang bán</option>
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
                                        <th><input type="checkbox" value="" class="check-all-order" name="selected-all">
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Chi tiết sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Danh mục sản phẩm</th>
                                        <th>Danh mục trang trại</th>
                                        <th>Trạng thái</th>
                                        <th style="width: 7%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td><input type="checkbox" value="{{$item->id}}" class="selected-item">
                                            <td>{{$item->name}}</td>
                                            <td><img src="{{$item->firstImage}}" style="width: 100px" alt=""></td>
                                            <td>{{$item->description}}</td>
                                            <td>{{\App\Helpers\Helper::formatVND($item->price)}}</td>
                                            <td>{{$item->category->name}}</td>
                                            <td>{{$item->farm->name}}</td>
                                            <td>{{$item->handlerStatus}}</td>
                                            <td>
                                                <a href="/admin/product/{{$item->id}}" class="hover-pointer dataItem">
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
        // //============================================ Download tất cả order đã chọn ==================================================
        // body.on('click', '#download-order', function () {
        //     $('form[name=export-order]').submit();
        //
        // })
        //
        // //============================================ Bỏ chọn tất cả ==================================================
        // body.on('click', '.clear-check-all', function () {
        //     selectItem.attr('checked', false)
        //     $('.check-all-order').attr('checked', false)
        // })
        // //============================================  chọn tất cả ==================================================
        // body.on('click', '.check-all', function () {
        //     selectItem.prop('checked', 'checked')
        //     $('.check-all-order').prop('checked', 'checked')
        // })

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
                // url: 'http://127.0.0.1:8000/admin/product/update-multi/status',
                url:"{{route('product.update-multi')}}",
                type: 'POST',
                data: JSON.stringify(data),
                success: function (data) {
                    console.log("console log thành công: ",JSON.parse(data))
                    $.toast({
                        heading: 'Success',
                        text: 'Cập nhật trạng thái sản phẩm thành công',
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
                            text: 'Cập nhật trạng thái sản phẩm thất bại',
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
        let price = $('select[name=priceSort]');
        $('#nameSort').change(function () {
            if (price.val() !== 0) {
                price.val(0)
            }
            this.form.submit();
        })
        let name = $('select[name=nameSort]');
        $('#priceSort').change(function () {
            if (name.val() !== 0) {
                name.val(0)
            }
            this.form.submit();
        })

        $('#category').change(function () {
            this.form.submit();
        })
        $('#farm').change(function () {
            this.form.submit();
        })
        $('#status').change(function () {
            this.form.submit();
        })
        $('#price').change(function () {
            this.form.submit();
        })
    </script>
@endsection

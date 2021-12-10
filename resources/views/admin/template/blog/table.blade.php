@extends('admin.master-admin')
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Danh sách bài viết</h3>
        </div>
    </div>
@endsection
@section('page-css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .dataTables_paginate .pagination .active .text-pagination {
            color: #0e7aff !important;
        }
    </style>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
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
                                                    <span>Chưa xóa</span>
                                                </li>
                                                <li data-toggle="modal" data-target="#exampleModal">
                                                    <span>Đã xoá</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h2>Danh mục bài viết</h2>
                    <div class="x_title">
                        <form action="/admin/blog/search" method="get" id="form-search">
                            @csrf
                            <div class="col-sm-12 col-md-12">
                                {{--              Find By Title                  --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right pr-2  top_search">
                                    <input type="text" class=" form-control query"
                                           value="{{$oldTitle ?? ""}}" name="title"
                                           placeholder="Tên bài viết...">
                                    <span class="delete-search">&times;</span>
                                    <span class="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                {{--                                --}}{{--        Search status             --}}
                                <div class="col-md-3 col-sm-3 form-group pull-right top_search pr-2">
                                    <select name="status" class="form-control sortOrder" id="status">
                                        <option value="">---Trạng thái---</option>
                                        <option value="1"{{isset($status) && $status == 1 ? 'selected' : ''}}>Chưa xoá</option>
                                        <option value="0"{{isset($status) && $status == 0 ? 'selected' : ''}}>Đã xóa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
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
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" value="" class="check-all-order" name="selected-all">
                                        <th>Id</th>
                                        <th>Ảnh bài viết</th>
                                        <th>Tên bài viết</th>
                                        <th>Mô tả</th>

                                        <th>Trạng thái</th>
                                        <th style="width: 7%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td><input type="checkbox" value="{{$item->id}}" class="selected-item">
                                            <td>{{$item->id}}</td>
                                            <td><img style="width: 100px" src="{{$item->FirstImage}}" class="img-thumbnail" alt=""></td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->description}}</td>

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
        <!-- Modal xác nhận xoá tất cả order đã chọn-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xoá các trang trại đã chọn?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button data-id="0" data-status="0" id="confirm-delete-all" type="button" class="btn btn-primary">Đồng ý
                        </button>
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
                $('.ids-update-choice').data('id', ids)
                $('#confirm-delete-all').data('id', ids)
            } else {
                $('#menu-table').css('display', 'none');
                $('#confirm-delete-all').data('id', '')
                $('.ids-update-choice').data('id', '')
            }
        });

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
                console.log("Data-id la:", $('.ids-update-choice').data('id'));
                console.log("Data-id xóa la:", $('#confirm-delete-all').data('id'));
                //hiển thị số lượng đã chon trên menu xử lý nhiều order 1 lúc
                $('.data-quantity-choice').text(`Đã chọn: ${ids.size}`)
            } else {
                $('#confirm-delete-all').data('id', '')
                $('.ids-update-choice').data('id', '')
            }
        })

        // ======================================== Update status tat ca order da chon ==============================
        $(document).on('click', '.update-status-choice', function () {
            let ids = Array.from( $(this).parent().data('id') ); // Lấy giá trị thuộc tính data-id
            console.log(ids);
            let status = $(this).data('status');
            console.log("trạng thái cập nhật: ", status);
            let data = {
                ids: ids,
                status: status
            }

            $.ajax({
                // url: 'http://127.0.0.1:8000/admin/blog/update-multi/status',
                url: "{{route('blog.update-multi')}}",
                type: 'POST',
                data: JSON.stringify(data),
                success: function (data) {
                    console.log("console log thư thành công: ",JSON.parse(data))
                    $.toast({
                        heading: 'Success',
                        text: 'Cập nhật trạng thái bài viết thành công',
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
                            text: 'Cập nhật trạng thái bài viết thất bại',
                            icon: 'error',
                        });
                    }
                }
            });
        });

        // ======================================== Xoa tat ca order da chon ==============================
        $(document).on('click', '#confirm-delete-all', function () {
            $('#exampleModal').css('display', 'none');
            let listId = Array.from($(this).data('id'));
            let status = $(this).data('status');
            let data = {
                ids: listId,
                status: status
            };
            console.log("Danh sách id xóa là: ", listId),
                console.log("trạng thái xóa là: ", status),

                $.ajax({
                    // url: 'http://127.0.0.1:8000/admin/blog/remove-multi/status',
                    url: "{{route('blog.remove-multi')}}",
                    type: 'POST',
                    data: JSON.stringify(data),

                    success: function (data) {
                        $.toast({
                            heading: 'Success',
                            text: 'Xoá thành công bài viết',
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
                                text: 'Xóa trạng thái bài viết thất bại',
                                icon: 'error',
                            });
                        }
                    }
                });
        })
    </script>
@endsection

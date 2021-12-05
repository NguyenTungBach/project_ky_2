@extends('client.master-template')
@section('title')
    <title>Tài khoản</title>
@endsection
@section('css-page')
    @include('client.page.blog.css')
    <style>

        .table_head th {
            text-align: center;
            padding-right: 5px;
            padding-left: 5px;
        }

        .table_row td {
            text-align: center;
            padding-right: 5px;
            padding-left: 5px;
        }

        .container-fluid {
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
@endsection
@section('content-page')
    {{--    title page --}}
    @include('client.include.title-page',['title'=>'Tài khoản'])

    <!-- content page -->
    <div class="bg0 p-t-100 p-b-80">
        <div class="container-fluid">
            <div class="wrap-table-shopping-cart rs1-table">
                <table class="table-shopping-cart">
                    <tr class="table_head bg12">
                        <th class="column-9" style="width: 10%;">Mã đơn hàng</th>
                        <th class="column-4">Tên người nhận</th>
                        <th class="column-3">Địa chỉ</th>
                        <th class="column-6">Số điện thoại</th>
                        <th class="column-5">Email</th>
                        <th class="column-4">Ghi chú</th>
                        <th class="column-4">Tổng tiền (VND)</th>
                        <th class="column-8">Trạng thái thanh toán</th>
                        <th class="column-8">Trạng thái đơn hàng</th>
                        <th class="column-9">Ngày đặt hàng</th>
                        <th class="column-9">Xem chi tiết</th>
                    </tr>

                    <tr class="table_row">
                        <td class="column-9">
                            1
                        </td>
                        <td class="column-4">
                            Hoàng nguyên
                        </td>
                        <td class="column-3">

                        </td>
                        <td class="column-6">
                            0946654123
                        </td>
                        <td class="column-5">
                            hoangkien3411@gmail.com
                        </td>
                        <td class="column-4">
                            giao tận cửa
                        </td>
                        <td class="column-4">
                            1,000,000
                        </td>
                        <td class="column-8">
                            chưa thanh toán
                        </td>
                        <td class="column-9">
                            đang giao
                        </td>
                        <td class="column-9">
                            13/03/2011
                        </td>
                        <td class="column-9">
                            <a href="/order/{id}" class="fa fa-info-circle text-info">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class=" flex-w flex-sb-m p-t-30">
                <a href="shop-sidebar-grid.html"
                   class="flex-c-m txt-s-103 cl0 bg10 size-h-9 hov-btn2 trans-04 pointer p-rl-29 m-tb-10">
                    Continue shopping
                </a>
            </div>
        </div>
    </div>




@endsection


@section('js-page')
    @include('client.page.blog.js')
@endsection

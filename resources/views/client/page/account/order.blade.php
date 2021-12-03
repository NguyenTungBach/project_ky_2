@extends('client.master-template')
@section('title')
    <title>Blog</title>
@endsection
@section('css-page')
    @include('client.page.blog.css')
@endsection
@section('content-page')
    {{--    title page --}}
    @include('client.include.title-page',['title'=>'Blog'])

<!-- content page -->
<div class="bg0 p-t-100 p-b-80">
    <div class="container-fluid">
        <div class="wrap-table-shopping-cart rs1-table">
            <table class="table-shopping-cart">
                <tr class="table_head bg12">
                    <th class="column-1" style="width: 5%">Mã đơn hàng</th>
                    <th class="column-2" style="width: 12%">Địa chỉ</th>
                    <th class="column-3" style="width: 8%">Số điện thoại</th>
                    <th class="column-4">Email</th>
                    <th class="column-4">Ghi chú</th>
                    <th class="column-4">Tổng tiền</th>
                    <th class="column-4">Trạng thái thanh toán</th>
                    <th class="column-4">Trạng thái đơn hàng</th>
                    <th class="column-4">Ngày đặt hàng</th>
                </tr>

                <tr class="table_row">
                    <td class="column-1" >
                        <div class="flex-w flex-m">
                        1
                        </div>
                    </td>
                    <td class="column-2">
                      Ngọc Hà Ba Đình Hà Nội
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                         0946654123
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                           hoangkien3411@gmail.com
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                            hoangkien3411@gmail.com
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                            hoangkien3411@gmail.com
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                            hoangkien3411@gmail.com
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                            hoangkien3411@gmail.com
                        </div>
                    </td>
                    <td class="column-4">
                        <div class="flex-w flex-sb-m">
                            hoangkien3411@gmail.com
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="flex-w flex-sb-m p-t-30">
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

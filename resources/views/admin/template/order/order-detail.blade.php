@extends('admin.master-admin')
@section('page-css')
    <style>
        .information-order {
            font-size: 16px;
        }

        .mb-2 h3 {
            font-size: 25px;
        }
        #status option{
            font-weight: 600;
        }

        #status{
            font-weight: 600;
        }
        .table thead tr th {
            font-size: 15px;
        }
        .table tbody tr td {
            font-size: 14px;
        }
        .information-order .col-sm-12 label, .information-order .col-sm-12 p {
            color: #4c4c4c;
        }
        #table-wrapper {
            position:relative;
        }
        #table-scroll {
            height:400px;
            overflow:auto;
            margin-top:20px;
        }
        #table-wrapper table {
            width:100%;

        }
        #table-wrapper table * {
            background: #ffffff;
            color:black;
        }
        #table-wrapper table thead th .text {
            position:absolute;
            top:-20px;
            z-index:2;
            height:20px;
            width:35%;
            border:1px solid red;
        }
    </style>
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
@endsection
@section('breadcrumb')
    <div class="page-title mb-4">
        <div class="title_left mb-3">
            <h3>Chi tiết hóa đơn thanh toán</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>Chi tiết hóa đơn thanh toán </h3>
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
                    @if(isset($item))
                        <section class="content invoice">
                            <div class="row invoice-info">

                                <div class="col-sm-4 invoice-col information-order">
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <h3>Mã đơn hàng {{$item->id}}:</h3>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Ngày tạo đơn hàng:</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->created_at}}">
                                        </div>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Ngày cập nhật đơn hàng:</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->updated_at}}">
                                        </div>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Ngày hủy đơn hàng:</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->deleted_at}}">
                                        </div>
                                    </div>
                                    <form action="/admin/order/update/status" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                            <label for="">Trạng thái:</label>
                                            <div class="w-75">
                                                @include('admin.template.order.status-select')
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col information-order">
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <h3>Thông tin người nhận:</h3>
                                    </div>
                                   @if($item->user_id)
                                        <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                            <label for="">Mã khách hàng :</label>
                                            <p style="word-break: break-all;"
                                               class="font-weight-light">{{$item->user_id}}</p>
                                        </div>
                                    @endif
                                    <div class="dis-flex" style="color: #000">
                                        <div class="mb-2 font-weight-bold col-sm-6 col-md-6" >
                                            <label for="">Tên người nhận :</label>
                                            <p style="word-break: break-all;"
                                               class="font-weight-light">{{$item->ship_name}}</p>
                                        </div>
                                        <div class="mb-2 font-weight-bold col-sm-6 col-md-6">
                                            <label for="">Số điện thoại :</label>
                                            <p style="word-break: break-all;"
                                               class="font-weight-light">{{$item->ship_phone}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Email :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->ship_email}}</p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Địa chỉ :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->ship_address}}</p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Chú thích :</label>
                                        <p style="word-break: break-all;" class="font-weight-light">
                                            {{$item->ship_note ?? 'Not note'}}
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col information-order">
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <h3>Thanh toán:</h3>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Tổng <small>(VND)</small>:</label>
                                        <p style="word-break: break-all;" class="font-weight-light">
                                            {{$item->FormatPrice}}
                                        </p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Trạng thái:</label>
                                        <p style="word-break: break-all;" class="font-weight-light">
                                            {{$item->check_out ? 'Đã thanh toán' : 'Chưa thanh toán'}}
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <h3>Chi tiết đơn hàng</h3>
                            </div>
                            <div class="row">
                                <div class="table table-striped table-bordered">
                                    <div id="table-wrapper">
                                        <div id="table-scroll">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th class="text">ID đơn hàng</th>
                                                    <th class="text">Ảnh</th>
                                                    <th class="text">Tên sản phẩm</th>
                                                    <th class="text">Giá sản phẩm<small>(VND)</small></th>
                                                    <th class="text">Số lượng mua</th>
                                                    <th class="text">Tiền vận chuyển</th>
                                                    <th class="text">Giảm giá</th>
                                                    <th class="text">Tổng tiền<small>(VND)</small></th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($item->orderDetails as $orderDetail)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td><img style="width: 80px" src="{{$orderDetail->product->firstImage}}" alt=""></td>
                                                        <td>{{$orderDetail->product->name}}</td>
                                                        <td>{{$orderDetail->FormatPrice}}</td>
                                                        <td>{{$orderDetail->quantity}}</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>{{number_format($orderDetail->quantity * $orderDetail->unit_price)}}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="text-center font-weight-bold" colspan="5">Tổng tiền hóa đơn</td>
                                                    <td class="text-center font-weight-bold" colspan="3">{{$item->formatPrice}} <small>(VND)</small> </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <a class="btn btn-secondary" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> Quay lại</a>
                        </section>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="/js/jquery.toast.min.js"></script>
@endsection


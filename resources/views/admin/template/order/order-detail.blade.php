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
    </style>
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
                </div>
                <div class="x_content">
                    @if(isset($item))
                        <section class="content invoice">
                            <div class="row invoice-info">

                                <div class="col-sm-4 invoice-col information-order">
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <h3>General detail:</h3>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Order creation date:</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->created_at}}">
                                        </div>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Order update date:</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->updated_at}}">
                                        </div>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Order delete date:</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->deleted_at}}">
                                        </div>
                                    </div>
                                    <form action="/admin/order/update/status" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                            <label for="">Order status:</label>
                                            <div class="w-75">
                                                @include('admin.template.order.status-select')
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col information-order">
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <h3>Shipping information:</h3>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Recipient's name :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->ship_name}}</p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Recipient's phone :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->ship_phone}}</p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Recipient's email :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->ship_email}}</p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Recipient's address :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->ship_address}}</p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Recipient's address :</label>
                                        <p style="word-break: break-all;" class="font-weight-light">
                                            {{$item->ship_note ?? 'Not note'}}
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col information-order">
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <h3>Payment:</h3>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Total <small>(VND)</small>:</label>
                                        <p style="word-break: break-all;" class="font-weight-light">
                                            {{$item->FormatPrice}}
                                        </p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Payment:</label>
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
                                <h3>Order detail</h3>
                            </div>
                            <div class="row">
                                <div class="table table-striped table-bordered">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>OrderID</th>
                                            <th>Product name</th>
                                            <th>Unit price<small>(VND)</small></th>
                                            <th>Quantity</th>
                                            <th>Ship</th>
                                            <th>Discount</th>
                                            <th>Total<small>(VND)</small></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($item->orderDetails as $orderDetail)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$orderDetail->product->name}}</td>
                                                <td>{{$orderDetail->FormatPrice}}</td>
                                                <td>{{$orderDetail->quantity}}</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>{{number_format($orderDetail->quantity * $orderDetail->unit_price)}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td class="text-center font-weight-bold" colspan="4">Total price order</td>
                                            <td class="text-center font-weight-bold" colspan="3">{{$item->FormatPrice}} <small>(VND)</small> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <a class="btn btn-secondary" href="/admin/orders"><i class="fa fa-arrow-left"></i> Back to Orders</a>
                        </section>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="/admin/js/manager-page.js"></script>
    <script>
        $('#status').change(function () {
            this.form.submit();
        })

    </script>
@endsection

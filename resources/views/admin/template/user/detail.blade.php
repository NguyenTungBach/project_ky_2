@extends('admin.master-admin')
@section('page-css')
    <style>
        .information-order {
            font-size: 16px;
        }

        .mb-2 h3 {
            font-size: 25px;
        }

        #status option {
            font-weight: 600;
        }

        #status {
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
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
@endsection
@section('breadcrumb')
    <div class="page-title mb-4">
        <div class="title_left mb-3">
            <h3>Chi tiết khách</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>Chi tiết khách hàng và những đơn hàng </h3>
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
                                        <p style="font-size: 20px">Mã khách hàng: <span> {{$item->id}}</span></p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Ngày tạo :</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->created_at}}">
                                        </div>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Ngày cập nhật :</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->updated_at}}">
                                        </div>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Ngày bị xóa:</label>
                                        <div>
                                            <input type="text" disabled value="{{$item->deleted_at}}">
                                        </div>
                                    </div>
                                    <form action="/admin/user/update/status" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                            <label for="">Trạng thái:</label>
                                            <div class="w-75">
                                                <select name="status-update" class="status-update"
                                                        data-id="{{$item->id}}"
                                                        style="font-size: 14px; padding: 5px; border: 1px solid #bdbdbd">
                                                    <option
                                                        value="0" {{$item->status == \App\Enums\UserStatus::Deleted ? 'selected' : ''}}>
                                                        Đã xóa
                                                    </option>
                                                    <option
                                                        value="1" {{$item->status == \App\Enums\UserStatus::Existed ? 'selected' : ''}}>
                                                        Đã kích hoạt
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col information-order">
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <h3 style="color: #000">Thông tin khách:</h3>
                                    </div>
                                    <div class="dis-flex" style="color: #000">
                                        <div class="mb-2 font-weight-bold col-sm-6 col-md-6">
                                            <label for="">Tên khách :</label>
                                            <p style="word-break: break-all;"
                                               class="font-weight-light">{{$item->name}}</p>
                                        </div>
                                        <div class="mb-2 font-weight-bold col-sm-6 col-md-6">
                                            <label for="">Số điện thoại :</label>
                                            <p style="word-break: break-all;"
                                               class="font-weight-light">{{$item->phone}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Email :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->email}}</p>
                                    </div>
                                    <div class="mb-2 font-weight-bold col-sm-12 col-md-12">
                                        <label for="">Địa chỉ :</label>
                                        <p style="word-break: break-all;"
                                           class="font-weight-light">{{$item->address}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 invoice-col information-order">
                                </div>
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <h3>Chi tiết đơn hàng</h3>
                            </div>

                            <div class="row">
                                @if(sizeof($item->orders) == 0)
                                    <div class="alert alert-info col-sm-12 col-md-12 text-center text-white mb-2 pb-1 pt-1" style="font-size: 18px;">
                                        Người dùng không có đơn hàng nào.
                                    </div>
                                @endif
                                <div class="table table-striped table-bordered">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID đơn hàng</th>
                                            <th>Tình trạng</th>
                                            <th>Tổng giá<small>(VND)</small></th>
                                            <th>Người nhận</th>
                                            <th>Email</th>
                                            <th>Xem chi tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($item->orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->HandlerStatus}}</td>
                                                <td>{{number_format($order->total_price)}}</td>
                                                <td>{{$order->ship_name}}</td>
                                                <td>{{$order->ship_email}}</td>
                                                <td>
                                                    <a href="/admin/order/detail/{{$order->id}}"
                                                       class="hover-pointer dataItem">
                                                        <i class="fa fa-info-circle mr-1 text-primary"
                                                           style="font-size: 16px;"
                                                           data-toggle="tooltip" data-placement="bottom"
                                                           title="Information"
                                                           data-original-title="Tooltip bottom"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <a class="btn btn-secondary" href="/admin/users"><i class="fa fa-arrow-left"></i> Quay về
                                danh sách khách hàng</a>
                        </section>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        $('#status').change(function () {
            this.form.submit();
        })

    </script>
@endsection


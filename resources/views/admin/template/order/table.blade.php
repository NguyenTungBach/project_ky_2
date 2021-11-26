@extends('admin.master-admin')
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
                    <h2>Default Example</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <div class="col-md-12 col-sm-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </ul>

                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Status</th>
                                        <th>Total Price(VND)</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Payment</th>
                                        <th style="width: 7%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>
                                                @switch($item->ship_status)
                                                    @case(1)
                                                    Done
                                                    @break
                                                    @case(2)
                                                    Waiting
                                                    @break
                                                    @case(3)
                                                    Processing
                                                    @break
                                                    @case(0)
                                                    Cancel
                                                    @break
                                                    @case(-1)
                                                    Deleted
                                                    @break
                                                @endswitch
                                            </td>
                                            <td>{{number_format($item['total_price'])}}</td>
                                            <td>{{$item->ship_name}}</td>
                                            <td>{{$item->ship_phone}}</td>
                                            <td>{{$item->ship_email}}</td>
                                            <td>
                                                @switch($item->check_out)
                                                    @case(0)
                                                    Unpaid
                                                    @break
                                                    @case(1)
                                                    Paid
                                                @endswitch
                                            </td>
                                            <td> <a href="/admin/order/{{$item->id}}" class="hover-pointer dataItem"
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
                                                <a href="/admin/order/delete/{{$item->id}}" id="delete" class="hover-pointer dataItem"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection


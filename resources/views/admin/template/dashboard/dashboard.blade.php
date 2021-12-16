@extends('admin.master-admin')
@section('page-css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 5px;
            border: 1px solid #888;
            width: 40%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        /* The Close Button */
        .close {
            color: #6c6c6c;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #fefefe;
            color: #454545;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: #fefefe;
            color: #535353;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="page-title">
        <div class="title_left">
            <h3>Trang thống kê</h3>
        </div>
    </div>
@endsection
@section('page-content')
    <!-- /top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">

                <div class="row x_title">
                    <div class="col-md-6">
                        <h5>Biểu đồ</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1 "></div>
                    <div class="col-md-10 col-sm-10 mb-4">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Doanh thu theo ngày</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="/admin/dashboard/findChart" method="post" id="form-search">
                                    @csrf
                                    <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                        @php
                                            use Carbon\Carbon;
                                            if (isset($oldStartDate) && isset($oldEndDate)){
                                                $oldStartDate = Carbon::parse($oldStartDate)->isoFormat('MM/DD/YYYY');
                                                $oldEndDate = Carbon::parse($oldEndDate)->isoFormat('MM/DD/YYYY');
                                            }
                                        @endphp
                                        <input type="hidden" name="startDate" id="startDate"
                                               value="{{$oldStartDate ?? ''}}">
                                        <input type="hidden" name="endDate" id="endDate" value="{{$oldEndDate ?? ''}}">

                                        <input id="picker" style="cursor: pointer ;background-color: #FFFFFF"
                                               class=" form-control query"
                                               value="{{isset($oldStartDate) && isset($oldEndDate) ? $oldStartDate ." - ". $oldEndDate : '' }}"
                                               placeholder="Search by date...">
                                        <span class="delete-search">&times;</span>
                                        <span class="icon-search"><i
                                                class="fa fa-search"></i></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 form-group pull-right pr-2 top_search">
                                        <a class="btn btn-secondary ml-3" style="padding: 5px 10px; border-radius: 10px" href="/admin/dashboard">Bỏ lọc</a>
                                    </div>
                                </form>
                                <div style="height: 300px" class="demo-placeholde" id="chart_div"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 "></div>
                </div>

                <div class="row">
                    <div class="col-md-1 col-sm-1 "></div>
                    <div class="col-md-10 col-sm-10 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Thống kê sản phẩm bán chạy nhất</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div id="piechart" style="width: 900px; height: 550px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 "></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <br/>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header header-modal-text">
                <h5></h5>
                <span class="close">&times;</span>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-close" type="button"> Thoát</button>
                <a class="btn btn-success" id="search-order" href="#">Tìm kiếm</a>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        $('.icon-search').on('click',function () {
            $('#form-search').submit();
        })
    </script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Date');
            data.addColumn('number', 'Amount');

            data.addRows([
                <?php
                if (isset($dataLineChart)) {
                    echo $dataLineChart;
                }
                ?>
            ]);

            var options = {
                hAxis: {
                    title: 'Thời gian'
                },
                vAxis: {
                    title: 'Tổng giá tiền'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            google.visualization.events.addListener(chart, 'select', selectLine);

            function selectLine() {
                let date = '';
                var selection = chart.getSelection();
                for (var i = 0; i < selection.length; i++) {
                    var item = selection[i];
                    if (item.row != null) {
                        date = data.getFormattedValue(item.row, 0);
                    }
                }

                if (date.length > 0) {
                   let id = '';
                    modalFindProduct(id, date, 1);
                } else {
                    $.toast({
                        heading: 'Information',
                        text: `Bạn không lựa chọn ngày nào.`,
                        icon: 'info',
                        loader: true,        // Change it to false to disable loader
                        loaderBg: '#9EC600',  // To change the background
                        position: 'top-right'
                    })
                }

            }

            chart.draw(data, options);
        }

    </script>

    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day', 'id'],
                <?php
                if (isset($dataPieChart)) {
                    echo $dataPieChart;
                }
                ?>
            ]);

            var options = {
                title: '10 Sản phẩm bán chạy nhất',
                chartArea: {left: 130, top: 80, width: '80%', height: '70%'},
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);

            google.visualization.events.addListener(chart, 'select', selectHandler);


            function selectHandler() {
                let id = '';
                let name = '';
                var selection = chart.getSelection();
                for (var i = 0; i < selection.length; i++) {
                    var item = selection[i];
                    if (item.row != null) {
                        id = data.getFormattedValue(item.row, 2);
                        name = data.getFormattedValue(item.row, 0);
                    }
                }

                if (id.length > 0) {
                    console.log(id, name);
                    modalFindProduct(id, name, 0);
                } else {
                    $.toast({
                        heading: 'Information',
                        text: `Bạn không lựa chọn sản phẩm nào.`,
                        icon: 'info',
                        loader: true,        // Change it to false to disable loader
                        loaderBg: '#9EC600',  // To change the background
                        position: 'top-right'
                    })
                }

            }
        }

        function modalFindProduct(id, value, type) {
            var span = document.getElementsByClassName("close")[0];
            var modal = document.getElementById("myModal");
            if (type === 0) {
                $('.header-modal-text h5').html(`Bạn đã có muốn tìm kiếm những hoá đơn có sản phẩm '${value}'?`)
                $('#search-order').attr('href', `/admin/order/search-product/${id}`)
            }
            if (type === 1) {
                $('.header-modal-text h5').html(`Bạn đã có muốn tìm kiếm những hoá đơn trong ngày '${value}'?`)
                $('#search-order').attr('href', `/admin/order/search-date/${value}`)
            }
            modal.style.display = "block";
            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            $('.btn-close').on('click', function () {
                modal.style.display = "none";
            })

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>
@endsection

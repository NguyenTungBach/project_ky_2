@extends('admin.master-admin')
@section('page-css')
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
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 5px;
            border: 1px solid #888;
            width: 40%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
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

        .modal-body {padding: 2px 16px;}

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
                        <h3>Biểu đồ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1 " ></div>
                    <div class="col-md-10 col-sm-10 mb-4" >
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Doanh thu theo ngày</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div style="height: 300px" class="demo-placeholde" id="chart_div"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 " ></div>
                </div>

                <div class="row">
                    <div class="col-md-1 col-sm-1 " ></div>
                    <div class="col-md-10 col-sm-10 " >
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
                    <div class="col-md-1 col-sm-1 " ></div>
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
            <div class="modal-header">
                <h4>Bạn đã chọn sản phẩm này.Bạn có muốn tìm kiếm những hoá đơn chứa sản phẩm này?</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-footer">
               <button class="btn btn-secondary btn-close" type="button"> Thoát </button>
                <a class="btn btn-success" href="">Tìm kiếm</a>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Date');
            data.addColumn('number', 'Amount');

            data.addRows([
                <?php  echo $dataLineChart; ?>
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

            chart.draw(data, options);
        }

    </script>

    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day', 'id'],
                <?php echo $dataPieChart;?>
            ]);

            var options = {
                title: '10 Sản phẩm bán chạy nhất',

                chartArea:{left:130,top:80,width:'80%',height:'70%'},

            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
            // google.visualization.events.addListener(chart, 'select', selectHandler);
            // function selectHandler(e) {
            //     var selection = chart.getValue(0,2);
            //     var message = '';
            //     console.log(selection)
            //     // for (var i = 0; i < selection.length; i++) {
            //     //     var item = selection[i];
            //     //     if (item.row != null && item.column != null) {
            //     //         var str = data.getFormattedValue(item.row, item.column);
            //     //         message += '{row:' + item.row + ',column:' + item.column + '} = ' + str + '\n';
            //     //     } else if (item.row != null) {
            //     //         var str = data.getFormattedValue(item.row, 2);
            //     //         message += '{row:' + item.row + ', column:none}; value (col 0) = ' + str + '\n';
            //     //     } else if (item.column != null) {
            //     //         var str = data.getFormattedValue(0, item.column);
            //     //         message += '{row:none, column:' + item.column + '}; value (row 0) = ' + str + '\n';
            //     //     }
            //     // }
            //     // if (message == '') {
            //     //     message = 'nothing';
            //     // }
            //     // var span = document.getElementsByClassName("close")[0];
            //     // var modal = document.getElementById("myModal");
            //     // var btnClose = document.getElementsByClassName(".btn-close");
            //     // alert('You selected ' + message);
            //     // modal.style.display = "block";
            //     // // When the user clicks on <span> (x), close the modal
            //     // span.onclick = function() {
            //     //     modal.style.display = "none";
            //     // }
            //     // btnClose.onclick = function() {
            //     //     alert(1);
            //     //     // modal.style.display = "none";
            //     // }
            //     //
            //     // // When the user clicks anywhere outside of the modal, close it
            //     // window.onclick = function(event) {
            //     //     if (event.target == modal) {
            //     //         modal.style.display = "none";
            //     //     }
            //     // }
            // }
        }



    </script>
@endsection

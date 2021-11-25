<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="">
    <div class="aHl">
    </div><div id=":o1" tabindex="-1">
    </div>
    <div id=":nq" class="ii gt" jslog="20277; u014N:xr6bB; 4:W251bGwsbnVsbCxbXV0.">
        <div id=":np" class="a3s aiL "><div class="adM">
            </div>
            <div bgcolor="#ffffff" link="#3366cc" vlink="#3366cc" alink="#3366cc" marginheight="0" marginwidth="0" style="margin:0;padding:0">
                <div class="adM">
                    <br><br>
                </div>
                <table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse;border-spacing:0">
                    <tbody>
                    <tr>
                        <td valign="top">
                            <div style="display:block;padding:0;margin:0;height:100%;max-height:none;line-height:normal;overflow:visible">
                                <table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse;border-spacing:0;width:742px">
                                    <tbody><tr>
                                        <td style="width:50px"></td>
                                        <td align="right" style="font-size:32px;font-weight:300;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;color:rgb(136,136,136)">Biên Nhận</td>
                                        <td style="width:50px"></td>
                                    </tr>
                                    <tr height="20"><td colspan="4">&nbsp;</td></tr><tr>
                                    </tr><tr>
                                        <td colspan="4" align="center">
                                            <table border="0" cellspacing="0" cellpadding="0" width="660" style="border-collapse:collapse;border-spacing:0">
                                                <tbody><tr>
                                                    <td>
                                                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;color:rgb(51,51,51);background-color:rgb(250,250,250);border-radius:3px;font-size:12px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">
                                                            <tbody>
                                                            <tr height="46">
                                                                <td width="320" colspan="2" style="padding-left:20px;border-style:solid;border-color:white;border-left-width:0;border-right-width:1px;border-bottom-width:1px;border-top-width:0px">
                                                                    <span style="color:rgb(102,102,102);font-size:10px">
                                                                        Người đặt hàng
                                                                    </span>
                                                                    <br>
                                                                    <a href="{{$order->ship_email}}" target="_blank">
                                                                        {{$order->ship_email}}
                                                                    </a>
                                                                </td>
                                                                <td width="340" rowspan="3" style="padding-left:20px;border-style:solid;border-color:white;border-left-width:0px;border-right-width:0px;border-top-width:0px;border-bottom-width:0px">
                                                                    <span style="color:rgb(102,102,102);font-size:10px">
                                                                        XUẤT HÓA ĐƠN ĐẾN
                                                                    </span>
                                                                    <br>
                                                                    Tên: {{$order->ship_name}}
                                                                    <br>
                                                                    Số điện thoại: {{$order->ship_phone}}
                                                                    <br>
                                                                    Địa chỉ: {{$order->ship_address}}
                                                                    <br>
                                                                    Ghi chú: {{$order->ship_note}}
                                                                </td>
                                                            </tr>
                                                            <tr height="46">
                                                                <td colspan="2" style="padding-left:20px;border-style:solid;border-color:white;border-left-width:0;border-right-width:1px;border-bottom-width:1px;border-top-width:0px">
                                                                    <span style="color:rgb(102,102,102);font-size:10px">
                                                                        NGÀY
                                                                    </span>
                                                                    <br>
                                                                    {{$order->created_at}}
                                                                </td>
                                                            </tr>
                                                            <tr height="46">
                                                                <td style="padding-left:20px;border-style:solid;border-color:white;border-left-width:0;border-right-width:1px;border-bottom-width:0px;border-top-width:0px"><span style="color:rgb(102,102,102);font-size:10px">
                                                                        ID ĐẶT HÀNG
                                                                    </span>
                                                                    <br>
                                                                    <span style="color:#0070c9">
                                                                        {{$order->id}}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            </tbody></table>
                                                    </td>
                                                </tr>

                                                <tr height="30"><td></td></tr>
                                                <tr>
                                                    <td>
                                                        <table width="660" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;width:660px;color:rgb(51,51,51);font-size:12px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">
                                                            <tbody><tr height="24" style="background-color:rgb(250,250,250)">
                                                                <td colspan="3" width="350" style="width:350px;padding-left:10px;border-top-left-radius:3px;border-bottom-left-radius:3px"><span style="font-size:14px;font-weight:500">
                                                                        Order Store
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr height="15"><td colspan="3">
                                                                </td>
                                                            </tr>
                                                            @php
                                                                $total_price_in_usd = 0;
                                                            @endphp
                                                            @foreach($order->orderDetails as $orderDetail)
                                                                @php
                                                                    if (isset($total_price_in_usd) && isset($orderDetail))
                                                                    $total_price_in_usd += \App\Helpers\Helper::convertVNDtoUSD($orderDetail->unit_price) * $orderDetail->quantity;
                                                                @endphp
                                                                <tr style="max-height:114px">
                                                                    <td width="64" align="center" valign="top" style="padding:0 0 0 20px;margin:0;width:64px">
                                                                        <img src="{{$orderDetail->product->FirstImage}}" width="64" height="64" border="0" alt="" style="padding:0;margin:0;border-radius:14px;border:1px solid rgba(128,128,128,0.2)" class="CToWUd">
                                                                    </td>
                                                                    <td style="padding:0 0 0 20px;line-height:15px">
                                                                        <span dir="auto" style="font-weight:600">
                                                                            {{$orderDetail->product->name}}
                                                                        </span>
                                                                        <br>
                                                                        <span style="color:rgb(102,102,102)">
                                                                            ID sản phẩm: {{$orderDetail->product_id}}
                                                                        </span>
                                                                        <br>
                                                                        <span style="color:rgb(102,102,102)">
                                                                            Giá VND: {{number_format($orderDetail->unit_price)}} đ
                                                                        </span>
                                                                        <br>
                                                                        <span style="color:rgb(102,102,102)">
                                                                            Số lượng đặt: {{$orderDetail->quantity}}
                                                                        </span>
                                                                        <br>
                                                                    </td>
                                                                    <td width="100" align="right" valign="top" style="padding:0 20px 0 0;width:100px">
                                                                        <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;border-spacing:0;font-size:12px;font-family:inherit">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td align="right" colspan="3">
                                                                                <span style="font-weight:600;white-space:nowrap">
                                                                                    Giá $: {{\App\Helpers\Helper::convertVNDtoUSD($orderDetail->unit_price) * $orderDetail->quantity}}
                                                                                </span>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table width="660" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0;width:660px;color:rgb(51,51,51);font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">
                                                            <tbody><tr height="30"><td colspan="3"></td></tr>
                                                            <tr height="1"><td height="1" colspan="3" style="padding:0 10px 0 10px"><div style="line-height:1px;height:1px;background-color:rgb(238,238,238)"></div></td></tr>
                                                            <tr height="48">
                                                                <td align="right" style="color:rgb(102,102,102);font-size:10px;font-weight:600;padding:0 30px 0 0;border-width:1px;border-color:rgb(238,238,238)">TỔNG CỘNG</td>
                                                                <td width="1" style="background-color:rgb(238,238,238);width:1px"></td>
                                                                <td width="90" align="right" style="width:120px;padding:0 20px 0 0;font-size:16px;font-weight:600;white-space:nowrap">
                                                                    {{$order->total_price}}đ ~ $ {{$total_price_in_usd}}
                                                                </td>
                                                            </tr>
                                                            <tr height="1"><td height="1" colspan="3" style="padding:0 10px 0 10px"><div style="line-height:1px;height:1px;background-color:rgb(238,238,238)"></div></td></tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    </tbody></table><div class="yj6qo"></div><div class="adL">
                    <br><br>
                </div></div><div class="adL">
            </div></div></div><div id=":o5" class="ii gt" style="display:none"><div id=":o6" class="a3s aiL "></div></div><div class="hi"></div></div>
</body>
</html>

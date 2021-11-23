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
<div style="width: 100%; background-color: #ededed; padding: 20px">
    <div style="margin: 0 25% 0 25%;background-color: #FFF; ">
        <div
            style="width: 100%;background-color: #FFF;display: flex;justify-content: space-between;padding: 0 10px 0 -27px;">
            <div style="padding-left: 15px;font-size: 16px"><p>RausachHn</p></div>
            <div style="padding-right: 15px; color: #808080; font-size: 16px"><p>OrderID: #{{$data->id}}</p></div>
        </div>
        <div style="width: 100%; background-color: #5dc343; padding: 10px 0 25px 0">
            <div style="padding-top: 10px; width: 100%;text-align: center;font-size: 24px;">
                <div>
                    <img style="background: #FFFFFF;border-radius: 40px;padding: 10px;" width="50px"
                         src="https://res.cloudinary.com/nguyenhs/image/upload/v1635587385/Demo_Laravel/EmailNotification/lc_shopping-cart_tio3t6.png"
                         alt="">
                </div>
            </div>
            <div style="width: 100%;text-align: center;font-size: 24px;">
                <h3 style="margin: 5px; color: #FFFFFF">Thank you for your purchase!</h3>
            </div>
            <div style="width: 100%;text-align: center">
                <p style="font-size: 16px; color: #FFFFFF; padding: 0 15% 0 15%">
                    Hi John, we're getting your order ready to be shipped. We will notify you when it has been sent.
                </p>
            </div>
{{--            <div style="width: 100%;text-align: center">--}}
{{--                <a href=""--}}
{{--                   style="text-decoration: none;background-color: #0e7aff;padding: 10px;border-radius: 5px;color: #FFF;font-weight: 600;">--}}
{{--                    View your order--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
        <div style="width: 100%; ">
            <div style="padding: 3px;border-bottom: 1px solid #000;"><h4
                    style="text-align: center">Order Summary</h4></div>
        </div>
        @foreach($data->orderDetails as $item)
            <div style="width: 100%;">
                <div style="width: 100%; min-height: 50px; display: flex; border-bottom: 1px solid #777777">
                    <div style="width: 20%; height: 100%">
                        <img width="100%"
                             src="{{$item->products->firstImage}}"
                             alt="">
                    </div>
                    <div style="width: 50%; padding-left: 40px">
                        <h3>{{$item->products->name}}  x{{$item->quantity}}</h3>
                        <p>Unit price: {{\App\util\Util::formatPriceToVnd($item->unit_price)}} <small>(VND)</small></p>
                        <p>category: {{$item->products->category->name}}</p>
                    </div>
                    <div style="width: 30%;">
                        <h4>Total price: </h4>
                        <p>{{\App\util\Util::formatPriceToVnd($item->total_price)}} <small>(VND)</small></p>
                    </div>
                </div>
            </div>
        @endforeach
        <div style="width: 100%; display: flex; ">
            <div style="width: 60%"></div>
            <div style="width: 40%;border-bottom: 1px solid #777777; padding-left: 50px">
                <p>Subtotal: 0 <small>(VND)</small></p>
                <p>Shipping: 0 <small>(VND)</small></p>
            </div>
        </div>
        <div style="width: 100%; display: flex;border-bottom: 1px solid #777777; ">
            <div style="width: 60%"></div>
            <div style="width: 40%; padding-left: 50px">
                <h3>Total price: <span>{{\App\util\Util::formatPriceToVnd($data->total_price)}} <small>(VND)</small></span></h3>
            </div>
        </div>
        <div style="width: 100%; background-color: #b5b5b5;color: #505050 ; padding: 10px 0 10px 0">

            <div style="width: 100%;text-align: center">
                <p style="font-size: 14px;">
                    Nếu bạn có bất kỳ câu hỏi nào, hãy trả lời email này hoặc liên hệ với chúng tôi tại <b>rausachtdhhn@gmail.com</b>
                </p>
            </div>
            <div style="width: 100%;text-align: center">
                <p style="font-size: 16px; ">
                    ©2021 Rausach Commerce
                </p>
            </div>
            <div style="width: 100%;text-align: center">
                <p style="font-size: 16px; ">
                    8 Tôn Thất Thuyết, Cầu Giấy, Hà Nội
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@extends('client.master-template')
@section('title')
    <title>Product</title>
@endsection
@section('css-page')
    @include('client.page.product.css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .custom-menu {
            padding: 0;
            background-color: #FFF;
            max-height: 85px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .custom-menu ul div {
            padding: 10px;
            text-align: center;
        }

        .custom-menu ul div:hover {
            cursor: pointer;
            background-color: #5cc374;
            color: #FFF;
        }

        .header-products {
            border-right: 1px #d9d9d9 solid;
            background-color: #5cc374;
            color: #FFF;
        }

        .list-article {
            display: block;
            padding: 0;
        }

        .custom-article {
            padding: 15px;
            background-color: #FFF;
            margin-bottom: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }


        .custom-article div {
            padding: 0;
        }

        .list-farm {
            display: none;
            padding: 0;
        }

        .custom-farm {
            display: flex;
            padding: 15px;
            background-color: #FFF;
            margin-bottom: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .custom-farm div {
            padding: 0;
        }

    </style>
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Trang trại'])


    <section class=" p-t-20 p-b-45" style="background-color: #f5f7f8">
        <div class="container">
            <div class="row">

                <div class="col-sm-10 col-md-7  m-rl-auto col-lg-8 custom-menu mb-3">
                    <ul class="dis-flex">
                        <div class="col-sm-6 col-md-6 col-lg-6 header-products">
                            <li>Giới thiệu sản phẩm mới</li>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 header-farm">
                            <li>Danh sách trang trại</li>
                        </div>

                    </ul>
                </div>

                <div class="col-sm-10 col-md-7 col-lg-8 m-rl-auto p-b-50 list-article">

                    @foreach($items as $item)
                        <div class="col-md-12 col-sm-12 mb-3 custom-article">
                            <div class="col-md-12 col-sm-12 dis-flex mb-3">
                                <div class="col-sm-4 col-md-4">
                                    Farm: {{$item->farm->name}}
                                </div>
                                <div class="col-sm-4 col-md-4"></div>
                                <div class="col-sm-4 col-md-4 justify-content-lg-end" style="display: inline-flex">
                                    Date: {{$item->created_at->format('d/m/y')}}
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mb-3 p-1">
                                <h4 class="pb-1">{{$item->title}}</h4>
                                <div class=" pb-1">
                                    <ul>
                                        <a href="{{route('product.getDetail',['id'=>$item->product_id])}}" style="color: #5cc374">
                                            <li>Xem sản phẩm</li>
                                        </a>
                                    </ul>
                                </div>
                                <p>
                                    {{$item->description}}
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-12 dis-flex image-farm">
                                @foreach($item->arrayThumbnail as $thumbnail)
                                    <div class="col-sm-4 col-md-4 p-2">
                                        <img class="img-thumbnail" src="{{$thumbnail}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-sm-10 col-md-7 col-lg-8 m-rl-auto p-b-50 list-farm">
                    @if(isset($farms))
                        @foreach($farms as $f)
                            <div class="col-md-12 col-sm-12 mb-3 custom-farm">
                                <div class="col-md-4 col-sm-4 dis-flex image-farm">
                                    <div class="col-sm-12 col-md-12 p-2">
                                        <img class="img-thumbnail" src="{{$f->FirstImage}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 mb-3 p-1">
                                    <h4 class="pb-1 font-weight-bold"><a href="/product/farm/{{$f->id}}">{{$f->name}}</a></h4>
                                    <div class="pb-1">
                                        <p>Created at: {{$f->created_at}}</p>
                                    </div>
                                    <p class="pb-1">Số điện thoại: {{$f->phone}}</p>
                                    <p>
                                            {{$f->description}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js-page')
    @include('client.page.product.js')
    <script src="/js/jquery.toast.min.js"></script>
{{--    <script src="/js/client-custom.js"></script>--}}
    @include('client.page.product.client-custom-js')
    <script>
        let listArticle = $('.list-article')
        let headerArticle = $('.header-products')
        let headerFarm = $('.header-farm')
        let listFarm = $('.list-farm')
        headerArticle.on('click', function () {
            if (listArticle.css('display') === 'none') {
                listArticle.css('display', 'block')
                headerArticle.css('background-color', '#33A34FFF')
                headerArticle.css('color', '#FFF')
                listFarm.css('display', 'none')
                headerFarm.css('background-color', '#FFF')
                headerFarm.css('color', '#000')
            }
        })
        $('.header-farm').on('click', function () {
            if (listFarm.css('display') === 'none') {
                listFarm.css('display', 'block')
                listArticle.css('display', 'none')
                headerFarm.css('background-color', '#33A34FFF')
                headerFarm.css('color', '#FFF')
                headerArticle.css('background-color', '#FFF')
                headerArticle.css('color', '#000')
            }
        })
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6170106f86aee40a573782e7/1fies0ctc';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6170425ce6ce4b7a"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
@endsection

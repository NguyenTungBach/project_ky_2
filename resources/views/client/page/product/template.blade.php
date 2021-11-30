@extends('client.master-template')
@section('title')
    <title>Product</title>
@endsection
@section('css-page')
    @include('client.page.product.css')
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
    <style>
        .filter-price-btn {
            background-color: #76c767;
            color: #FFF;
            border-radius: 5px;
            font-weight: bolder;
            height: 45px;
        }

        .filter-price-btn:hover {
            background-color: #47a935;
        }

        .checkbox:hover {
            cursor: pointer;
        }

    </style>
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Sản Phẩm'])


    <section class="bg0 p-t-85 p-b-45">
        <div class="container">
            <form action="/product/search" method="get">
                @csrf
                <div class="row">
                    <div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-50">
                        <div class="leftbar p-t-15">
                            <!--  -->
                            <div class="size-a-21 pos-relative">
                                <input style="padding: 0 50px 0 10px;" class=" s-full bo-all-1 bocl15 " type="text"
                                       name="name"
                                       placeholder="Tìm kiếm theo tên ..." value="{{$oldName ?? ""}}">
                                <span id="delete-search-name" style="top: 7px;right: 35px;"
                                      class="pointer flex-c-m fs-18 ab-t-r hov11">x</span>
                                <button style="width: 35px" class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
                                    <img class="hov11-child trans-04" src="/client/images/icons/icon-search.png"
                                         alt="ICON">
                                </button>
                            </div>

                            <!--  -->
                            <div class="p-t-45">
                                <h4 class="txt-m-101 cl3">
                                    LỌC THEO GIÁ SẢN PHẨM
                                </h4>
                                @php
                                    $array = array();
                                     for ($i = 1 ; $i < 7; $i++){
                                          $obj = new stdClass();
                                         switch ($i){
                                             case 1:
                                                  $obj->key = $i;
                                                  $obj->value = 'Sản phẩm từ 0 - 100 nghìn';
                                                  array_push($array,$obj);
                                             break;
                                             case 2:
                                                  $obj->key = $i;
                                                  $obj->value = 'Sản phẩm từ 100 - 200 nghìn';
                                                 array_push($array,$obj);
                                             break;
                                             case 3:
                                                  $obj->key = $i;
                                                  $obj->value = 'Sản phẩm từ 200 - 300 nghìn';
                                                 array_push($array,$obj);
                                             break;
                                             case 4:
                                                  $obj->key = $i;
                                                  $obj->value = 'Sản phẩm từ 300 - 400 nghìn';
                                                  array_push($array,$obj);
                                             break;
                                             case 5:
                                                  $obj->key = $i;
                                                  $obj->value = 'Sản phẩm từ 400 - 500 nghìn';
                                                  array_push($array,$obj);
                                             break;
                                             case 6:
                                                  $obj->key = $i;
                                                  $obj->value = 'Sản phẩm trên 500 nghìn';
                                                   array_push($array,$obj);
                                             break;
                                         }
                                     }
                                @endphp
                                <div class="rs1-select2 bg0  bo-all-1 bocl15 m-tb-7 ">
                                    <select class="js-select2" id="price" name="price">
                                        <option value="">-- Giá tiền --</option>
                                        @foreach($array as $item)
                                            <option value="{{$item->key}}"
                                                {{isset($oldPrice) && $oldPrice == $item->key ? "selected": ""}}
                                            >{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                    <div class="dropDownSelect2"></div>

                                </div>
                            </div>

                            <!--  -->
                            <div class="p-t-40">
                                <h4 class="txt-m-101 cl3 p-b-5">
                                    Danh Mục Sản Phẩm
                                </h4>
                                <div>
                                    <div class="rs1-select2 bg0 bo-all-1 bocl15 m-tb-7 ">
                                        <select class="js-select2" id="categories" name="categories">
                                            <option value="">-- Danh mục --</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"
                                                    {{isset($oldCategory) && $oldCategory == $category->id ? "selected": ""}}
                                                >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="p-t-20">
                                    <a href="/products" style="color: #FFF;background-color: #81b03f"
                                       class="btn float-right">
                                        Làm mới
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
                        <div>
                            <div class="flex-w flex-r-m p-b-45 flex-row-rev">
                                <div class="flex-w flex-m p-tb-8">
                                    <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
                                        <select class="js-select2" id="nameSort" name="nameSort">
                                            <option value="{{\App\Enums\Sort::None}}">---Sắp xếp theo tên---</option>
                                            <option value="{{\App\Enums\Sort::Asc}}"
                                                {{isset($nameSort) && $nameSort == \App\Enums\Sort::Asc ? "selected": ""}}
                                            >Name A-Z
                                            </option>
                                            <option value="{{\App\Enums\Sort::Desc}}"
                                                {{isset($nameSort) && $nameSort == \App\Enums\Sort::Desc ? "selected": ""}}
                                            >Name Z-A
                                            </option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>

                                    <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
                                        <select class="js-select2" id="priceSort" name="priceSort">
                                            <option value="{{\App\Enums\Sort::None}}">---Sắp xếp theo giá tiền ---
                                            </option>
                                            <option value="{{\App\Enums\Sort::Asc}}"
                                                {{isset($priceSort) && $priceSort == \App\Enums\Sort::Asc ? "selected": ""}}
                                            >Price low to high
                                            </option>
                                            <option value="{{\App\Enums\Sort::Desc}}"
                                                {{isset($priceSort) && $priceSort == \App\Enums\Sort::Desc ? "selected": ""}}
                                            >Price high to low
                                            </option>

                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>

                                <span class="txt-s-101 cl9 m-r-30 size-w-53">
								Hiển thị 1–{{$limit}} trong {{$sumProduct}} sản phẩm
							</span>
                            </div>

                            <!-- Shop grid -->
                            <div class="shop-grid">
                                <div class="row">
                                    <!-- - -->
                                    @if(isset($items))
                                        @foreach($items as $item)
                                            <div class="col-sm-6 col-lg-4 p-b-30">
                                                <!-- Block1 -->
                                                <div class="block1">
                                                    <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                                        <img src="{{$item->firstImage}}" alt="IMG">
                                                        <div class="block1-content flex-col-c-m p-b-46">
                                                            <a href="/product/detail/{{$item->id}}"
                                                               class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                                                {{$item->name}}
                                                            </a>

                                                            <span
                                                                class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
													{{$item->formatPrice}} <small>VND</small>
												</span>

                                                            <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                                                <a href="/product/{{$item->id}}"
                                                                   class="block1-icon flex-c-m wrap-pic-max-w">
                                                                    <img style="padding: 6px"
                                                                         src="/client/images/icons/information.png"
                                                                         alt="ICON">
                                                                </a>

                                                                <p data-id="{{$item->id}}"
                                                                   class=" pointer cart-add block1-icon flex-c-m wrap-pic-max-w">
                                                                    <img src="/client/images/icons/icon-cart.png"
                                                                         alt="ICON">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <!-- Pagination -->
                            @if(isset($items))
                                <div class="flex-w flex-c-m p-t-47">
                                    {{$items->appends(request()->all())->links('client.include.pagination')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('js-page')
    @include('client.page.product.js')
    <script src="/js/jquery.toast.min.js"></script>
    <script>
        {{--   Add to Cart Ajax     --}}
        $('.cart-add').on('click', function () {
            let id = $(this).data('id');
            let data = {
                id: id,
                quantity: 1
            }
            $.ajax({
                url: `http://127.0.0.1:8000/cart/add`,
                method: 'POST',
                data: JSON.stringify(data),
                success: function (response) {
                    let result = JSON.parse(response);
                    let stringHtml = ``;
                    let totalCart = 0;
                    Object.entries(result).forEach(([key, value]) => {
                        stringHtml += cartHeader(value);
                        totalCart += value.unitPrice * value.quantity;
                    });
                    $('#cart-header').html(stringHtml)
                    $('#total-cart').html(`
                    <p>${new Intl.NumberFormat().format(totalCart)} <small>VND</small></p>
                    `)
                    $('.icon-header-item').attr('data-notify', Object.keys(result).length);
                    message();
                },

            });

        })

        function cartHeader(data) {

            return `
            <div class="flex-w flex-str m-b-25 " style="position: relative">
                <div class="size-w-15 flex-w flex-t">
                    <a href="/product/${data.id}"
                       class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                        <img src="${data.thumbnail}" alt="PRODUCT">
                    </a>

                    <div class="size-w-17 flex-col-l">
                        <a href="/product/${data.id}" class="txt-s-108 cl3 hov-cl10 trans-04">${data.name}</a>
                        <span class="txt-s-101 cl9">${new Intl.NumberFormat().format(data.unitPrice)} <small>VND</small></span>
                        <span class="txt-s-109 cl12">x${data.quantity}</span>
                    </div>
                </div>

                <div class="size-w-14 flex-b">
                    <a href="/cart/delete/${data.id}"
                       style="position: absolute;top: 0;" class="lh-10">
                        <img src="/client/images/icons/icon-close.png" alt="CLOSE">
                    </a>
                </div>
            </div>

            `;

        }

        function message() {
            $.toast({
                icon: 'success',
                heading: 'Thành công',
                text: 'Thêm mới sản phẩm thành công vào giỏ hàng.',
                bgColor: '#81b03f',
                textColor: 'white'
            });
        }

    </script>
    <script>
        let oldMaxPrice = parseInt($('#oldMaxPrice').text());
        let oldMinPrice = parseInt($('#oldMinPrice').text());
        var $range = $("#js-range-slider"),
            $inputFrom = $("#js-input-from"),
            $inputTo = $("#js-input-to"),
            instance,
            min = 0,
            max = 1999999,
            from = 0,
            to = 0;

        $range.ionRangeSlider({
            skin: "modern",
            type: "double",
            min: min,
            max: max,
            from: oldMinPrice !== -1 ? oldMinPrice : 0,
            to: oldMaxPrice !== -1 ? oldMaxPrice : 0,
            onStart: updateInputs,
            onChange: updateInputs
        });
        instance = $range.data("ionRangeSlider");

        function updateInputs(data) {
            from = data.from;
            to = data.to;

            $inputFrom.prop("value", from);
            $inputTo.prop("value", to);
        }

        $inputFrom.on("input", function () {

            var val = $(this).prop("value");

            // validate
            if (val < min) {
                val = min;
            } else if (val > to) {
                val = to;
            }

            instance.update({
                from: val
            });
        });

        $inputTo.on("input", function () {

            var val = $(this).prop("value");

            // validate
            if (val < from) {
                val = from;
            } else if (val > max) {
                val = max;
            }

            instance.update({
                to: val
            });
        });
    </script>
    <script>
        $('.checkbox').on('change', function () {
            this.form.submit();
        })
        let price = $('select[name=priceSort]');
        $('#nameSort').change(function () {
            if (price.val() !== 0) {
                price.val(0)
            }
            this.form.submit();
        })
        let name = $('select[name=nameSort]');
        $('#priceSort').change(function () {
            if (name.val() !== 0) {
                name.val(0)
            }
            this.form.submit();
        })

        $('#categories').change(function () {
            this.form.submit();
        })
        $('#price').change(function () {
            this.form.submit();
        })

        $('#delete-search-name').on('click', function () {
            $('input[name=name]').val('')
        })
    </script>
@endsection

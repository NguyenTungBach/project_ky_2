@extends('client.master-template')
@section('title')
    <title>Product</title>
@endsection
@section('css-page')
    @include('client.page.product.css')
@endsection
@section('content-page')
    <!-- Title page -->
    @include('client.include.title-page',['title'=>'Product'])

    <section class="bg0 p-t-85 p-b-45">
        <div class="container">
            <form action="/product/search" method="get">
                @csrf
                <div class="row">
                    <div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-50">
                        <div class="leftbar p-t-15">
                            <!--  -->
                            <div class="size-a-21 pos-relative">
                                <input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="name"
                                       placeholder="Search by name ...">
                                <button class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
                                    <img class="hov11-child trans-04" src="/client/images/icons/icon-search.png" alt="ICON">
                                </button>
                            </div>

                            <!--  -->
                            <div class="p-t-45">
                                <h4 class="txt-m-101 cl3">
                                    FILTER BY PRICE
                                </h4>

                                <div class="filter-price p-t-32">

                                    <input id="js-range-slider"/>
                                    <input type="hidden" name="minPrice" id="js-input-from" />
                                    <input type="hidden" name="maxPrice" id="js-input-to" />
                                    <div class="flex-sb-m flex-w p-t-16">
                                        <div class="txt-s-115 cl9 p-t-10 p-b-10 m-r-20">
                                            Price: <span>0 <small>(VND)</small></span> - $<span>4999999 <small>(VND)</small></span>
                                        </div>
                                        <div>
                                            <button  class="txt-s-107 cl6 hov-cl10 trans-04">
                                                Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="p-t-40">
                                <h4 class="txt-m-101 cl3 p-b-37">
                                    Categories
                                </h4>

                                <ul>
                                    @foreach($categories as $category)
                                        <li class="p-b-5">
                                            <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
                                                <span class="m-r-10">{{$category->name}}</span>
                                                <input type="checkbox" class="checkbox" value="{{$category->id}}" name="categories">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-50">
                        <div>
                            <div class="flex-w flex-r-m p-b-45 flex-row-rev">
                                <div class="flex-w flex-m p-tb-8">
                                    <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
                                        <select class="js-select2" id="nameSort" name="nameSort">
                                            <option value="{{\App\Enums\Sort::None}}">---Sort name---</option>
                                            <option value="{{\App\Enums\Sort::Asc}}">Name A-Z</option>
                                            <option value="{{\App\Enums\Sort::Desc}}">Name Z-A</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>

                                    <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
                                        <select class="js-select2" id="priceSort" name="priceSort">
                                            <option value="{{\App\Enums\Sort::None}}">---Sort price---</option>
                                            <option value="{{\App\Enums\Sort::Asc}}">Price low to high</option>
                                            <option value="{{\App\Enums\Sort::Desc}}">Price high to low</option>

                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>

                                <span class="txt-s-101 cl9 m-r-30 size-w-53">
								Showing 1–12 of 23 results
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

                                                            <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
													{{$item->formatPrice}} <small>VND</small>
												</span>

                                                            <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                                                <a href="/product/detail/{{$item->id}}"
                                                                   class="block1-icon flex-c-m wrap-pic-max-w">
                                                                    <img src="/client/images/icons/icon-view.png" alt="ICON">
                                                                </a>

                                                                <a href="/cart/add?id={{$item->id}}&quantity=1"
                                                                   {{--                                                                   class="add-to-cart block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">--}}
                                                                   class="add-to-cart block1-icon flex-c-m wrap-pic-max-w">
                                                                    <img src="/client/images/icons/icon-cart.png" alt="ICON">
                                                                </a>

                                                                <a href="wishlist.html"
                                                                   class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                                                    <img class="icon-addwish-b1"
                                                                         src="/client/images/icons/icon-heart.png"
                                                                         alt="ICON">
                                                                    <img class="icon-addedwish-b1"
                                                                         src="/client/images/icons/icon-heart2.png"
                                                                         alt="ICON">
                                                                </a>
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
                                    {{--                            {{$items->links('client.include.pagination')}}--}}
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
    <script>
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
            from: 0,
            to: 0,
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
        $('#nameSort').change(function () {
            this.form.submit();
        })
        $('#priceSort').change(function () {
            this.form.submit();
        })
    </script>
@endsection

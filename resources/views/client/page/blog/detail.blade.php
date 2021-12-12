@extends('client.master-template')
@section('title')
    <title>Blog</title>
@endsection
@section('css-page')
    @include('client.page.blog.css')
@endsection
@section('content-page')
    {{--    title page --}}
    @include('client.include.title-page',['title'=>'Blog'])


<!-- Title page -->


<!-- Content page -->
<section class="bg0 p-t-100 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-sm-11 col-md-8 col-lg-9 m-rl-auto p-b-80">
                <!-- detail blog -->
                <div class="p-b-50">
                    <div class="wrap-pic-w">
                        <img src="{{$items->thumbnail}}" alt="BLOG">
                    </div>

                    <div class="p-t-30">
                        <h4 class="txt-m-125 cl3">
                            {{$items->title}}
                        </h4>

                        <div class="flex-w flex-m txt-s-115 cl9 p-t-14 p-b-22">
								<span class="m-r-22">
									{{$items->created_at->format('d/m/y')}}
								</span>

                            <span class="m-r-22">
									Post by <span class="txt-s-108 cl6">Cần rau sạch</span>
								</span>
                        </div>

                        <p class="txt-s-101 cl6 p-b-12">
                            {{$items->description}}
                        </p>
                        <p class="txt-s-101 cl6 p-b-12">
                            {!! $items->content !!}
                        </p>
                    </div>
                </div>



            </div>

            <div class="col-sm-11 col-md-4 col-lg-3 m-rl-auto p-b-80">
                <div class="rightbar">
                    <div class="p-t-40">
                        <h4 class="txt-m-101 cl3 p-b-37">
                          Bài viết mới nhất
                        </h4>

                        <ul>

                           @foreach($new as $item)
                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-64 wrap-pic-w hov4">
                                        <img src="{{$item->thumbnail}}" alt="IMG">
                                    </a>

                                    <div class="size-w-65 flex-col-l p-t-7">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                           {{$item->title}}
                                        </a>

                                        <span class="txt-s-106 cl9">
											{{$item->created_at->format('d/m/y')}}
										</span>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('js-page')
    @include('client.page.blog.js')

    @include('client.plugin.plugin')
@endsection

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

    <section class="bg0 p-t-100 p-b-15">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-9 m-rl-auto p-b-80">
                    <!-- item blog -->
                    @foreach($items as $item)
                        <div class="p-b-47">
                            <a href="/blogs/{{$item->id}}" class="wrap-pic-w how-pos8-parent hov4">
                                <img src="{{$item->thumbnail}}" alt="BLOG">

                                <div class="size-a-4 bg10 flex-col-c-m how-pos8">
								<span class="txt-l-106 cl0 p-b-4">
								   {{$item->created_at->format('d')}}
								</span>

                                    <span class="txt-m-108 cl0 p-b-5">
								  {{$item->created_at->format('m')}}
								</span>
                                </div>
                            </a>

                            <div class="p-t-35">
                                <h4>
                                    <a href="blog-single.html" class="txt-m-125 cl3 hov-cl10 trans-04">
                                        {{$item->title}}
                                    </a>
                                </h4>

                                <p class="txt-s-101 cl6 p-t-18">
                                    {{$item->description}}
                                </p>

                                <div class="flex-w flex-sb-m">
                                    <div class="flex-w flex-m txt-s-115 cl9 m-r-30 p-tb-19">
									<span class="m-r-25">
										Post by <span class="txt-s-108 cl6">Rau cần sạch</span>
									</span>
                                    </div>

                                    <div class="how-line2 p-l-40 m-t-2">
                                        <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                            Read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination -->

                </div>

                <div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-80">
                    <div class="rightbar">
                        <!--  -->
                        <div class="p-t-40">
                            <h4 class="txt-m-101 cl3 p-b-37">
                                LATEST POSTS
                            </h4>

                            <ul>
                                @foreach($items as $item)
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



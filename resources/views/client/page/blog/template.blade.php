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
                    <div class="p-b-47">
                        <a href="blog-single.html" class="wrap-pic-w how-pos8-parent hov4">
                            <img src="/client/images/blog-14.jpg" alt="BLOG">

                            <div class="size-a-4 bg10 flex-col-c-m how-pos8">
								<span class="txt-l-106 cl0 p-b-4">
									18
								</span>

                                <span class="txt-m-108 cl0 p-b-5">
									June
								</span>
                            </div>
                        </a>

                        <div class="p-t-35">
                            <h4>
                                <a href="blog-single.html" class="txt-m-125 cl3 hov-cl10 trans-04">
                                    Contrary to popular
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-t-18">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>

                            <div class="flex-w flex-sb-m">
                                <div class="flex-w flex-m txt-s-115 cl9 m-r-30 p-tb-19">
									<span class="m-r-25">
										Post by <span class="txt-s-108 cl6">Samuel Stewart</span>
									</span>

                                    <span>
										15 Comments
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

                    <!-- item blog -->
                    <div class="p-b-47">
                        <a href="blog-single.html" class="wrap-pic-w how-pos8-parent hov4">
                            <img src="/client/images/blog-15.jpg" alt="BLOG">

                            <div class="size-a-4 bg10 flex-col-c-m how-pos8">
								<span class="txt-l-106 cl0 p-b-4">
									18
								</span>

                                <span class="txt-m-108 cl0 p-b-5">
									June
								</span>
                            </div>
                        </a>

                        <div class="p-t-35">
                            <h4>
                                <a href="blog-single.html" class="txt-m-125 cl3 hov-cl10 trans-04">
                                    Nor again is there anyone who loves
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-t-18">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt.
                            </p>

                            <div class="flex-w flex-sb-m">
                                <div class="flex-w flex-m txt-s-115 cl9 m-r-30 p-tb-19">
									<span class="m-r-25">
										Post by <span class="txt-s-108 cl6">Samuel Stewart</span>
									</span>

                                    <span>
										15 Comments
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

                    <!-- item blog -->
                    <div class="p-b-47">
                        <a href="blog-single.html" class="wrap-pic-w how-pos8-parent hov4">
                            <img src="/client/images/blog-16.jpg" alt="BLOG">

                            <div class="size-a-4 bg10 flex-col-c-m how-pos8">
								<span class="txt-l-106 cl0 p-b-4">
									18
								</span>

                                <span class="txt-m-108 cl0 p-b-5">
									June
								</span>
                            </div>
                        </a>

                        <div class="p-t-35">
                            <h4>
                                <a href="blog-single.html" class="txt-m-125 cl3 hov-cl10 trans-04">
                                    Itaque earum rerum hic tenetur
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-t-18">
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea
                                voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo
                                voluptas nulla pariatur.
                            </p>

                            <div class="flex-w flex-sb-m">
                                <div class="flex-w flex-m txt-s-115 cl9 m-r-30 p-tb-19">
									<span class="m-r-25">
										Post by <span class="txt-s-108 cl6">Samuel Stewart</span>
									</span>

                                    <span>
										15 Comments
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

                    <!-- item blog -->
                    <div class="p-b-47">
                        <a href="blog-single.html" class="wrap-pic-w how-pos8-parent hov4">
                            <img src="/client/images/blog-17.jpg" alt="BLOG">

                            <div class="size-a-4 bg10 flex-col-c-m how-pos8">
								<span class="txt-l-106 cl0 p-b-4">
									18
								</span>

                                <span class="txt-m-108 cl0 p-b-5">
									June
								</span>
                            </div>
                        </a>

                        <div class="p-t-35">
                            <h4>
                                <a href="blog-single.html" class="txt-m-125 cl3 hov-cl10 trans-04">
                                    Temporibus autem quibusdam et
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-t-18">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the actual
                                teachings of the great explorer of the truth, the master-builder of human happiness. No one
                                rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who
                                do not know.
                            </p>

                            <div class="flex-w flex-sb-m">
                                <div class="flex-w flex-m txt-s-115 cl9 m-r-30 p-tb-19">
									<span class="m-r-25">
										Post by <span class="txt-s-108 cl6">Samuel Stewart</span>
									</span>

                                    <span>
										15 Comments
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

                    <!-- item blog -->
                    <div class="p-b-47">
                        <a href="blog-single.html" class="wrap-pic-w how-pos8-parent hov4">
                            <img src="/client/images/blog-18.jpg" alt="BLOG">

                            <div class="size-a-4 bg10 flex-col-c-m how-pos8">
								<span class="txt-l-106 cl0 p-b-4">
									18
								</span>

                                <span class="txt-m-108 cl0 p-b-5">
									June
								</span>
                            </div>
                        </a>

                        <div class="p-t-35">
                            <h4>
                                <a href="blog-single.html" class="txt-m-125 cl3 hov-cl10 trans-04">
                                    Nam libero tempore cum soluta
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-t-18">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                                est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                            </p>

                            <div class="flex-w flex-sb-m">
                                <div class="flex-w flex-m txt-s-115 cl9 m-r-30 p-tb-19">
									<span class="m-r-25">
										Post by <span class="txt-s-108 cl6">Samuel Stewart</span>
									</span>

                                    <span>
										15 Comments
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

                    <!-- Pagination -->
                    <div class="flex-w flex-c-m p-t-7">
                        <a href="#"
                           class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 active-pagi1">
                            1
                        </a>

                        <a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3">
                            2
                        </a>

                        <a href="#"
                           class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
                            Next
                            <span class="lnr lnr-chevron-right m-t-3 m-l-7"></span>
                            <span class="lnr lnr-chevron-right m-t-3"></span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-10 col-md-4 col-lg-3 m-rl-auto p-b-80">
                    <div class="rightbar">
                        <!--  -->
                        <div class="size-a-21 pos-relative">
                            <input class="s-full bo-all-1 bocl15 p-rl-20" type="text" name="search"
                                   placeholder="Search products...">
                            <button class="flex-c-m fs-18 size-a-22 ab-t-r hov11">
                                <img class="hov11-child trans-04" src="/client/images/icons/icon-search.png" alt="ICON">
                            </button>
                        </div>

                        <!--  -->
                        <div class="p-t-55">
                            <h4 class="txt-m-101 cl3 p-b-27">
                                Categories
                            </h4>

                            <ul>
                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Vegetable
										</span>

                                        <span>
											3
										</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Fruit
										</span>

                                        <span>
											5
										</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Fruit Juic
										</span>

                                        <span>
											9
										</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Dried
										</span>

                                        <span>
											9
										</span>
                                    </a>
                                </li>

                                <li class="p-b-5">
                                    <a href="#" class="flex-sb-m flex-w txt-s-101 cl6 hov-cl10 trans-04 p-tb-3">
										<span class="m-r-10">
											Other
										</span>

                                        <span>
											2
										</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!--  -->
                        <div class="p-t-40">
                            <h4 class="txt-m-101 cl3 p-b-37">
                                LATEST POSTS
                            </h4>

                            <ul>
                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-64 wrap-pic-w hov4">
                                        <img src="/client/images/last-post-01.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-65 flex-col-l p-t-7">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                            Sed ut perspiciatis
                                        </a>

                                        <span class="txt-s-106 cl9">
											November 12, 2017
										</span>
                                    </div>
                                </li>

                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-64 wrap-pic-w hov4">
                                        <img src="/client/images/last-post-02.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-65 flex-col-l p-t-7">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                            Ut enim ad minima
                                        </a>

                                        <span class="txt-s-106 cl9">
											November 12, 2017
										</span>
                                    </div>
                                </li>

                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-64 wrap-pic-w hov4">
                                        <img src="/client/images/last-post-03.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-65 flex-col-l p-t-7">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                            Quis autem vel eum
                                        </a>

                                        <span class="txt-s-106 cl9">
											November 12, 2017
										</span>
                                    </div>
                                </li>

                                <li class="flex-w flex-sb-t p-b-30">
                                    <a href="#" class="size-w-64 wrap-pic-w hov4">
                                        <img src="/client/images/last-post-04.jpg" alt="IMG">
                                    </a>

                                    <div class="size-w-65 flex-col-l p-t-7">
                                        <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                            Et harum quidem
                                        </a>

                                        <span class="txt-s-106 cl9">
											November 12, 2017
										</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--  -->
                        <div class="p-t-25">
                            <h4 class="txt-m-101 cl3 p-b-37">
                                Search by tags
                            </h4>

                            <div class="flex-w m-r--10">
                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Food
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Green
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Vegetables
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Organic
                                </a>

                                <a href="#"
                                   class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Farm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('js-page')
   @include('client.page.blog.js')
@endsection



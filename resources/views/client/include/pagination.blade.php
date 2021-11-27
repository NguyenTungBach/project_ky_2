@if($paginator->hasPages())

    <!-- Prevoius Page Link -->
    @if($paginator->onFirstPage())
        <a class="paginate-previous disabled flex-c-m txt-s-115 cl6  how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
            Trước
        </a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}"
           class="paginate-previous disabled flex-c-m txt-s-115 cl6  how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
            Trước
        </a>
    @endif

    <!-- Pagination Elements Here -->

    @foreach($elements as $element)
        <!-- Make three dots -->
        @if(is_string($element))
            <a  class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 disabled">
                {{ $element }}
            </a>
        @endif

        <!-- Links Array Here -->
        @if(is_array($element))
            @foreach($element as $page=>$url)
                @if($page == $paginator->currentPage())
                    <a href="{{ $paginator->previousPageUrl() }}"
                       class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 active-pagi1">
                        {{ $page }}
                    </a>
                @else
                    <a href="{{$url}}"
                       class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3">
                        {{ $page }}
                    </a>
                @endif

            @endforeach
        @endif

    @endforeach

    <!-- Next Page Link -->
    @if($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
           class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
            Tiếp
        </a>
    @else
        <a class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
            Tiếp
        </a>
    @endif


@endif


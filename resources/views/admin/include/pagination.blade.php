@if($paginator->hasPages())
    <ul class="pagination">
        <!-- Prevoius Page Link -->
        @if($paginator->onFirstPage())
            <li class="previous disabled"><a>Previous</a></li>
        @else
            <li class="previous "><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
        @endif

    <!-- Pagination Elements Here -->

        @foreach($elements as $element)
        <!-- Make three dots -->
            @if(is_string($element))
                <li class="disabled"><a class="text-pagination">{{ $element }}</a></li>
            @endif

        <!-- Links Array Here -->
            @if(is_array($element))
                @foreach($element as $page=>$url)
                    @if($page == $paginator->currentPage())
                        <li class="active"><a class="text-pagination">{{ $page }}</a></li>
                    @else
                        <li><a href="{{$url}}">{{ $page }}</a></li>
                    @endif

                @endforeach
            @endif

        @endforeach

    <!-- Next Page Link -->
        @if($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}">Next</a></li>
        @else
            <li class="next disabled"><a>Next</a></li>
        @endif
    </ul>

@endif

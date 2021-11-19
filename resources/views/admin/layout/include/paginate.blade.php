<div class="row datatables-footer">
    <div class="col-sm-12 col-md-6">
        <div class="dataTables_info" id="datatable-editable_info" role="status" aria-live="polite">
            Showing {{($items->currentPage() -1)* $limit + 1}} to {{($items->currentPage() -1)* $limit + $limit }} of {{$totalItem->count()}} item, total page {{$items->lastPage()}}
        </div>
    </div><div class="col-sm-12 col-md-6">
        <div class="dataTables_paginate paging_bs_normal" id="datatable-editable_paginate">
            @php
                $link_limit = 7;
            @endphp
            @if($items->lastPage() >1)
                <ul class="pagination">
                    {{--                                    chỉ hiển thị khi lớn hơn 1--}}
                    @if($items->currentPage()>1)
                        <li>
                            <a href="{{$items->url(1)}}" class="page-link">
                                First
                            </a>
                        </li>
                        <li>
                            <a href="{{$items->url($items->currentPage()-1)}}" class="page-link">
                                        <span class="fa fa-chevron-left">
                                        </span>
                            </a>
                        </li>
                    @endif
                    @for($i = 1;$i<= $items->lastPage(); $i++ )
                        @php
                            if(isset($link_limit) && isset($items)){
                                $half_total_links = floor($link_limit / 2);
                                $from = $items->currentPage() - $half_total_links;
                                $to = $items->currentPage() + $half_total_links;
                                if ($items->currentPage() < $half_total_links) {
                                $to += $half_total_links - $items->currentPage();
                                }
                                if ($items->lastPage() - $items->currentPage() < $half_total_links) {
                                $from -= $half_total_links - ($items->lastPage() - $items->currentPage()) - 1;
                                }
                            }
                        @endphp
                        @if ($from < $i && $i<$to)
                            <li class="{{$items->currentPage() ==$i ? 'active' : ''}}">
                                <a href="{{$items->url($i)}}" class="page-link">{{$i}}</a>
                            </li>
                        @endif
                    @endfor
                    {{--                                    chỉ hiển thị khi currentPage < lastPage--}}
                    @if($items->currentPage() < $items->lastPage())
                        <li>
                            <a href="{{ $items->url($items->currentPage() + 1) }}" class="page-link">
                                        <span class="fa fa-chevron-right">
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $items->url($items->lastPage()) }}" class="page-link">
                                Last
                            </a>
                        </li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
</div>

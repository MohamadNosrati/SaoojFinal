@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
{{--             Previous Page Link--}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" >
                    <span class="text-white" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a class="text-white" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

{{--             Pagination Elements--}}
            @foreach ($elements as $element)
{{--                 "Three Dots" Separator--}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span class="text-white">{{ $element }}</span></li>
                @endif

{{--                 Array Of Links--}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span class="text-white">{{ $page }}</span></li>
                        @else
                            <li><a class="text-white" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

{{--             Next Page Link--}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="text-white" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="text-white" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif

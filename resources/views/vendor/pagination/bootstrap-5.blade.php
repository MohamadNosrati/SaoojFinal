@if ($paginator->hasPages())
    <div dir="ltr" class="mainPagination">
        <ul class="">
            @if ($paginator->onFirstPage())
                <li class="direction daPaginate" aria-disabled="true">
                    <span class="page-link bg-dark text-white rounded-0" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="direction">
                    <a class="page-link text-white bg-dark rounded-0" href="{{ $paginator->previousPageUrl() }}"
                       rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="number disabled" aria-disabled="true"><span
                            class="page-link">{{ $element }}</span></li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li  class="number activePage" aria-current="page"><span
                                    class="page-link">{{ $page }}</span></li>
                        @else
                            <li  class="number"><a class="page-link"
                                                                href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="direction">
                    <a class="page-link text-white bg-dark rounded-0" href="{{ $paginator->nextPageUrl() }}"
                       rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="direction daPaginate" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link text-white bg-dark rounded-0" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </div>
@endif

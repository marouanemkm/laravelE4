@if ($paginator->hasPages())
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link"><i class="fas fa-arrow-left"></i></span></li>
        @else
            <li class="page-item"><a href="{{$paginator->previousPageUrl()}}" rel="prev" class="page-link"><i class="fas fa-arrow-left"></i></a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item"><span class="page-link">{{$element}}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active my-active"><span class="page-link">{{$page}}</span></li>
                    @else
                        <li class="page-item"><a href="{{$url}}" class="page-link">{{$page}}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{$paginator->nextPageUrl()}}" rel="prev" class="page-link"><i class="fas fa-arrow-right"></i></a></li>
        @else
            <li class="page-item disabled"><span class="page-link"><i class="fas fa-arrow-right"></i></span></li>
        @endif

    </ul>
@endif
@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span>&laquo; পূর্ববর্তী</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; পূর্ববর্তী</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">পরবর্তী &raquo;</a>
        @else
            <span>পরবর্তী &raquo;</span>
        @endif
    </div>
@endif

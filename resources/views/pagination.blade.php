<style>
   
</style>
@if ($paginator->hasPages())
    <ul class="pager" >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" ><span id="pg">⮜</span></li>
        @else
            <li  ><a href="{{ $paginator->previousPageUrl() }}"   rel="prev"   ><span id="pg">⮜</span></a></li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" ><span >{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

                    @if ($paginator->onFirstPage())
                    @else

                    <li ><a href="{{ $paginator->previousPageUrl() }} " >{{ $page -1 }} </a></li> 
@endif
                        <li class="active my-active"><span   id="pg">{{ $page }}</span></li>
                        @if ($paginator->hasMorePages())

                        <li ><a href="{{ $paginator->nextPageUrl() }} " >{{ $page+1 }} </a></li> 
@endif

                   
                    @endif
                    
                @endforeach
            @endif

        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
           <div><li><a href="{{ $paginator->nextPageUrl() }}" rel="next" id="pg">⮞</a></li></div> 
        @else
            <li class="disabled"><span>⮞</span></li>
        @endif
    </ul>
@endif
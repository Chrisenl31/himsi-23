<div class="pagination">
    @if (!$paginator->onFirstPage())
    <button wire:click="previousPage">&lt</button>
    @else
    <button style="pointer-events: none; color:rgb(155, 155, 155)">&lt</button>
    @endif

    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
    <button wire:click="gotoPage({{ $i }})" class="{{ ($i == $paginator->currentPage()) ? 'selected' : '' }}">{{ $i }}</button>
    @endfor


    @if ($paginator->hasMorePages())
    <button wire:click="nextPage">&gt</button>
    @else
    <button style="pointer-events: none; color:rgb(155, 155, 155)">&gt</button>
    @endif

</div>

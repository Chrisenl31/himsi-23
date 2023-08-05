<div class="pagination">
    @if (!$paginator->onFirstPage())
    <button wire:key="page-previous" wire:click="gotoPage({{ $paginator->currentPage()-1 }})">&lt</button>
    @else
    <button style="pointer-events: none; color:rgb(155, 155, 155)">&lt</button>
    @endif

    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
    <button wire:key="page-{{ $i }}" wire:click="gotoPage({{ $i }})" class="{{ ($i == $paginator->currentPage()) ? 'selected' : '' }}">{{ $i }}</button>
    @endfor


    @if ($paginator->hasMorePages())
    <button wire:key="page-next" wire:click="gotoPage({{ $paginator->currentPage()+1 }})">&gt</button>
    @else
    <button style="pointer-events: none; color:rgb(155, 155, 155)">&gt</button>
    @endif

</div>

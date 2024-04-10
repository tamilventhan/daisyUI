<div class="join">
    <button wire:click="gotoPage(1)" class="join-item btn">First</button>
    <button wire:click="previousPage" class="join-item btn">Prev</button>

    @for ($i = 1; $i <= $lastPage; $i++)
    <button wire:click="gotoPage({{ $i }})" class="join-item btn {{ $page == $i ? 'btn-active' : '' }}">{{ $i }}</button>
    @endfor

    <button wire:click="nextPage" class="join-item btn">Next</button>
    <button wire:click="gotoPage({{ $lastPage }})" class="join-item btn">Last</button>
</div>
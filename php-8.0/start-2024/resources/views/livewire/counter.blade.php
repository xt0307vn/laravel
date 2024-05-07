<div>
    <h1>This is a counter</h1>
    <div>
        <h2>Count: {{ $count }}</h2>
        <button wire:click="increase">Increase</button>
        <button wire:click="decrease">Decrease</button>
    </div>
    <button wire:click="redirectToTest">Redirect</button>
    <ul class="list list-group">
        @foreach ($numbers as $key => $number)
        <li class="item list-group-item" wire:click="handleClickItem({{ $key }})">{{ $number }}</li>
        @endforeach
    </ul>
    <h1>{{ $uKey }}</h1>
</div>

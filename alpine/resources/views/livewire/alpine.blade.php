<div>
    <p>Count: {{$count}}</p>
    <button wire:click="incrementar">
        Aumentar desde livewire
    </button>
    <div x-data="{ count: @entangle('count').defer }">

        <p>Count dentro de Alpine <span x-text="count"></span></p>
        <button @click="count++">
            Aumentar
        </button>

    </div>
</div>

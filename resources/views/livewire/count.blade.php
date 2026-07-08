<div>
    <div>
        <flux:button wire:click="sum" variant="primary" >Add +</flux:button>

        <p>
            {{ $total }}
        </p>
    </div>

    <div>
        <flux:input wire:model.live="name"/>
        <p>
            {{ $name }}
        </p>
        <flux:button wire:click="toggleCaseName('UPPER')">UPPER</flux:button>
        <flux:button wire:click="toggleCaseName('LOWER')">LOWER</flux:button>
        <flux:button wire:click="sendName">Send name to Todo Component</flux:button>
    </div>

</div>

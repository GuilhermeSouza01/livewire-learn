<div>
    <form wire:submit="save" class="space-y-6">
        <flux:field>
            <flux:label>Name</flux:label>
            <flux:input
                wire:model.live="name"
                id="name"
                placeholder="Enter the name"
            />
            <flux:error name="name" />
        </flux:field>


        <flux:input
            wire:model.live="email"
            type="email"
            label="Email"
            placeholder="Enter the email"
        />

        <div class="flex justify-end">
            <flux:button type="submit" variant="primary">
                Save
            </flux:button>
        </div>
    </form>
</div>

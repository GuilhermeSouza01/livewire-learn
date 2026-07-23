<div>

    <form wire:submit="save" class="space-y-6">
        <flux:field>
            <flux:label>Avatar</flux:label>
            @if($avatar)
                <img src="{{ $avatar->temporaryUrl() }}" alt="">
            @endif
            <flux:input
                wire:model="avatar"
                id="avatar"
                placeholder="Put the file"
                type="file"
                name="avatar"
            />
            <flux:error name="avatar" />
        </flux:field>


        <div class="flex justify-end">
            <flux:button type="submit" variant="primary">
                Save
            </flux:button>
        </div>
    </form>
</div>

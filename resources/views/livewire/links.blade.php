<div>
    <form wire:submit="createLink">
        <flux:field>
            <flux:label>Link</flux:label>

            <flux:description>Enter the endpoint of your url</flux:description>

            <flux:input required wire:model="endpoint" placeholder="meet"/>

            <flux:error name="endpoint" placeholder="meet"/>
        </flux:field>
        <flux:field class="my-4">
            <flux:label>Target</flux:label>

            <flux:description>Enter the target of your url</flux:description>

            <flux:input type="url" required wire:model="target" placeholder="https://example.com" />

            <flux:error name="target" />
        </flux:field>

        <flux:button variant="primary" type="submit">{{ __('Create link') }}</flux:button>
    </form>
    @if (session()->has('message'))
        <flux:text variant="success" class="mt-2 font-medium !dark:text-green-400 !text-green-600">
            {{ session('message') }}
        </flux:text>
    @endif
</div>

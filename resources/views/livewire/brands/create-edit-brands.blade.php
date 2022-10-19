<div class="custom-main-content">
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ $brand ? 'Edit' : 'Create' }} brand
        </h2>
    </x-slot>

    @if ($notFound)
        Not found
    @endif
    
    <form method="post">
        <ul style="list-style: none">
            <li>
                <label for="name">Name:</label>
                <input wire:model.debounce.500ms="name" type="text" name="name" />
            </li>
            <li>
                <label for="country">Country:</label>
                <input wire:model.debounce.500ms="country" type="text" name="country" />
            </li>
        </ul>

        <button wire:click="handle" {{ $success ? "disabled" : "" }} type="button" class="btn btn-outline-primary" style="margin-top: 15px">
            {{ $brand ? 'Save' : 'Create' }}
        </button>
        @if ($success) <span>Ok!</span> @endif
    </form>
</div>
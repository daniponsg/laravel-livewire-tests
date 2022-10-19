<div class="custom-main-content">
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            @if ($brand)
                Edit Brand
            @else
                Create Brand
            @endif
        </h2>
    </x-slot>

    @if ($notFound)
        Not found
    @endif

    {{ $brand }}
    
    <form method="post">
        <ul style="list-style: none">
            <li>
                <label for="name">Name:</label>
                <input wire:model.debounce.500ms="name" type="text" id="name" name="name" />
            </li>
            <li>
                <label for="country">Country:</label>
                <input wire:model.debounce.500ms="country" type="text" id="country" name="country" />
            </li>

            <button wire:click="handle" type="button" class="btn btn-outline-primary" style="margin-top: 15px">
                @if ($brand)
                    Save changes
                @else
                    Create
                @endif
            </button>
        </ul>
    </form>
</div>
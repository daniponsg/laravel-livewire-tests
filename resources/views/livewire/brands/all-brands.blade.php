<div class="custom-main-content">
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            All Brands
        </h2>
    </x-slot>

    <button wire:click="toCreate" type="button" class="btn btn-outline-primary" style="margin-bottom: 15px">Create</button>

    <table id="custom-brands-table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Updated</td>
                <td>Name</td>
                <td>Country</td>
                <td></td>
            </tr>
        </thead>
        <tbody class="custom-content-table-body">
            @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->updated_at }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->country }}</td>
                    <td class="custom-table-actions">
                        <button wire:click="edit('{{ $brand->id }}')" type="button" class="btn btn-outline-secondary">Edit</button> 
                        <button wire:click="delete('{{ $brand->id }}')" type="button" class="btn btn-outline-secondary">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

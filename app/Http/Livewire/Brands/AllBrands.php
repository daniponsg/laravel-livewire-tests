<?php

namespace App\Http\Livewire\Brands;

use Livewire\Component;
use App\Models\Brand;

class AllBrands extends Component
{
    public function render()
    {
        return view('livewire.brands.all-brands', ['brands' => Brand::all()]);
    }

    public function toCreate()
    {
        return redirect()->to('/brands/create');
    }

    public function delete($id)
    {
        Brand::find($id)->delete();
    }

    public function edit($id) {
        return redirect()->to('/brands/'.$id);
    }
}

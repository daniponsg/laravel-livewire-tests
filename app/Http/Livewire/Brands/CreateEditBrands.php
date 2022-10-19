<?php

namespace App\Http\Livewire\Brands;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Str;


class CreateEditBrands extends Component
{

    public $name, $country, $brand;
    public $notFound, $success;

    public function mount(Brand $brand)
    {                
        $this->brand = null;

        if ($brand->id) {
            $this->brand = $brand;
           
            $this->name = $this->brand->name;
            $this->country = $this->brand->country;
        }
    }

    public function render()
    {
        return view('livewire.brands.create-edit-brands');
    }

    public function handle()
    {
        $this->validate([
            'name' => ['required'],
            'country' => ['required'],
        ]);

        $brand = [
            'name' => $this->name,
            'country'=> $this->country,
        ];

        $this->success = true;

        if ($this->brand != null) {
            Brand::find($this->brand->id)->update($brand);

            return;
        } 

        $brand['id'] = Str::uuid()->toString();

        Brand::create($brand);        
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Property;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProperty extends Component
{
    use WithFileUploads;

    public $name;
    public $brief;
    public $price;
    public $status;
    public $paid_returns;
    public $annual_yield;
    public $images;

    protected $rules = [
        'name' => ['required', 'string', 'max:200'],
        'brief' => ['required', 'string', 'max:200'],
        'price' => ['required', 'numeric', 'min:1'],
        'status' => ['required', 'string', 'in:off-plan,on-plan'],
        'paid_returns' => ['required', 'string',],
        'annual_yield' => ['required', 'string',],
        'images' => ['required', 'array', 'min:1'],
        'images.*' => ['required', 'image', 'max:2048'],
    ];

    public function save()
    {
        $this->validate();
        $imagesPaths = [];

        $data = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'brief' => $this->brief,
            'price' => $this->price,
            'status' => $this->status,
            'paid_returns' => $this->paid_returns,
            'annual_yield' => $this->annual_yield,
        ];

        if ($property = Property::create($data)) {
            // Other images
            foreach ($this->images as $imageFile) {
                $imagesPaths[] = $imageFile->store('uploads/images/properties', 'public');
            }

            $property->images = $imagesPaths;
            $property->save();

            return redirect()->route('admin.properties.index')->with('success', 'Property added successfully.');
        }
    }

    public function render()
    {
        return view('livewire.admin.create-property');
    }
}

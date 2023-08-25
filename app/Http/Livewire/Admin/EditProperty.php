<?php

namespace App\Http\Livewire\Admin;

use App\Models\Property;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProperty extends Component
{
    use WithFileUploads;

    public $property;
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
        'images.*' => ['nullable', 'image', 'max:2048'],
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

        if ($this->property->update($data)) {

            if ($this->images) {
                // Other images
                foreach ($this->images as $imageFile) {
                    $imagesPaths[] = $imageFile->store('uploads/images/properties', 'public');
                }

                $this->property->images = array_merge(json_decode($this->property->images), $imagesPaths);
                $this->property->save();
            }

            return redirect()->route('admin.properties.index')->with('success', 'Property modified successfully.');
        }
    }

    public function mount()
    {
        $this->name = $this->property->name;
        $this->brief = $this->property->brief;
        $this->price = $this->property->price;
        $this->status = $this->property->status;
        $this->paid_returns = $this->property->paid_returns;
        $this->annual_yield = $this->property->annual_yield;
    }

    public function render()
    {
        return view('livewire.admin.edit-property');
    }
}

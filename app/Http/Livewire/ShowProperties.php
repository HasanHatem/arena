<?php

namespace App\Http\Livewire;

use App\Models\Property;
use Livewire\Component;

class ShowProperties extends Component
{
    public int $amount = 3;
    public int $showLoadMore = 1;
    public $content;

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('reapply-splide');
    }

    public function load()
    {
        $this->amount += 3;
    }

    public function render()
    {
        $properties = Property::latest()->take($this->amount)->get();
        $count = Property::count();

        if ($this->amount >= $count) {
            $this->showLoadMore = 0;
        }

        return view('livewire.show-properties', compact('properties'));
    }
}

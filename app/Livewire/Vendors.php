<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;

class Vendors extends Component
{
    use WithPagination;
    public function render()
    {
        $vendors = \App\Models\Vendor::paginate(10);

        return view('livewire.vendors', compact('vendors'))->layout('layouts.app');
    }
}

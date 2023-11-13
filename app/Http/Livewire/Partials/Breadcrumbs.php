<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public $breadcrumbs, $title;

    public function render()
    {
        return view('livewire.partials.breadcrumbs');
    }
}

<?php

namespace App\Http\Livewire\Guest\Menu;

use App\Models\Category;
use Livewire\Component;

class Sidebar extends Component
{

    public function render()
    {
        $categories = Category::get();

        return view('livewire.guest.menu.sidebar')
                ->with('categories', $categories);
    }
}

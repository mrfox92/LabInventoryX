<?php

namespace App\View\Components\Partials\Icons;

use Illuminate\View\Component;

class BxIcons extends Component
{
    public $iconClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($iconClass)
    {
        $this->iconClass = $iconClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partials.icons.bx-icons');
    }
}

<?php

namespace App\View\Components\theaters;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Seats extends Component
{
    /**
     * Create a new component instance.
     */
       /**
     * Create a new component instance.
     */
    public function __construct(
        public object $seats,
        public bool $showView = true,
        public bool $showEdit = true,
        public bool $showDelete = true,
    )
    {
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theaters.seats');
    }
}

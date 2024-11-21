<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Image extends Component
{
    /**
     * Create a new component instance.
     */

    public $src;
    public $alt;
    public $class;
    public function __construct(
        $src,
        $alt,
        $class,
    ) {
        //
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image');
    }
}

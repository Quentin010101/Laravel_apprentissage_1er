<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mainBlock extends Component
{

    public $tags;
    public $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products, $tags)
    {
        $this->products = $products;
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-block');
    }
}

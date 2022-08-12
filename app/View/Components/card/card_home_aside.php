<?php

namespace App\View\Components\card;

use Illuminate\View\Component;

class card_home_aside extends Component
{

    public $product;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.card_home_aside');
    }
}

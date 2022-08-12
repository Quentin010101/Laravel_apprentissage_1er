<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class log extends Component
{
    public $link;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $link)
    {
        $this->text = $text;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.log');
    }
}

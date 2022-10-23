<?php

namespace App\View\Components\Adminpanel\Nav;

use Illuminate\View\Component;

class Button extends Component
{
    public $title;
    public $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $href)
    {
        $this->title =  $title;
        $this->href =  $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.adminpanel.nav.button');
    }
}

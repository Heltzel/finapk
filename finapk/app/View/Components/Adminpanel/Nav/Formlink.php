<?php

namespace App\View\Components\Adminpanel\Nav;

use Illuminate\View\Component;

class Formlink extends Component
{
    public $action;
    public $href;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $href, $title)
    {
        $this->action = $action;
        $this->href = $href;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.adminpanel.nav.formlink');
    }
}

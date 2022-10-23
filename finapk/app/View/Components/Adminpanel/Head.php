<?php

namespace App\View\Components\Adminpanel;

use Illuminate\View\Component;

class Head extends Component
{
    public $project;
    public $section;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($project,  $section)
    {
        $this->project = $project;
        $this->section = $section;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.adminpanel.head');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SupportBox extends Component
{
    public $title = '';
    public $button = '';
    public $link = '';

    /**
     * Create a new component instance.
     */
    public function __construct($title = '', $button = '', $link = '')
    {
        $this->title = $title;
        $this->button = $button;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.support-box');
    }
}

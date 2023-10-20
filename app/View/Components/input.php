<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public $for_name_id;
    public $content;
    public $placeholder;
    public $type;
    public $value;

    public function __construct($class, 
    // $for_name_id,
     $content, $placeholder, $type, $value = null)
    {
        $this->class = $class;
        // $this->for = $for_name_id;
        // $this->name = $for_name_id;
        // $this->id = $for_name_id;
        $this->content = $content;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $headers;

    /**
     * Create a new component instance.
     *
     * @param array $headers
     * @return void
     */
    public function __construct($headers)
    {
        $this->headers = $headers;
        // $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}

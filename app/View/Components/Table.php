<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $headers;
    public $body;

    /**
     * Create a new component instance.
     *
     * @param array $headers
     * @param string $body
     * @return void
     */
    public function __construct($headers, $body)
    {
        $this->headers = $headers;
        // $this->data = $data;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}

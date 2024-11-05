<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileUploader extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $id;
    public function __construct($name, $id)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.file-uploader');
    }
}
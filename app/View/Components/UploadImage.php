<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UploadImage extends Component
{

    public $value;
    public $name;


    public function __construct($value=null , $name)
    {
        $this->value = $value;
        $this->name = $name;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.upload-image');
    }
}

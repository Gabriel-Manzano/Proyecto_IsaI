<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HotelCard extends Component
{
    public $image;
    public $name;
    public $location;
    public $rating;
    public $link;

    public function __construct($image, $name, $location, $rating = null, $link = null)
    {
        $this->image = $image;
        $this->name = $name;
        $this->location = $location;
        $this->rating = $rating;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.hotel-card');
    }
}


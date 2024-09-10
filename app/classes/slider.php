<?php

namespace App\classes;

class slider
{

    public $sliders = [];
    public function __construct()
    {
        $this->sliders = [
            0 => [
                'id' => '0',
                'img' => 'assets/images/2.jpg',
                'title' => '1st Slide',
                'description' => 'Lorem ipsum',
            ],
            1 => [
                'id' => '1',
                'img' => 'assets/images/3.jpg',
                'title' => '2nd Slide',
                'description' => 'Lorem ipsum',
            ],
            2 => [
                'id' => '2',
                'img' => 'assets/images/4.jpg',
                'title' => '3rd Slide',
                'description' => 'Lorem ipsum',
            ],
        ];
    }

    public function getAllSlider()
    {
        return $this->sliders;
    }

    public function getSliderById($id)
    {
        foreach ($this->sliders as $slider) {
            if ($slider['id'] == $id) {
                return $slider;
            }
        }
    }
}

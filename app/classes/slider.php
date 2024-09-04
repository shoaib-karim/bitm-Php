<?php

namespace App\classes;

class slider {

    public $slider = [];
    public function __construct(){
        $this->slider = [
            0 => [
                'img' => 'assets/images/2.jpg',
                'title' => '1st Slide',
                'description' => 'Lorem ipsum',
            ],
            1 => [
                'img' => 'assets/images/3.jpg',
                'title' => '2nd Slide',
                'description' => 'Lorem ipsum',
            ],
            2 => [
                'img' => 'assets/images/4.jpg',
                'title' => '3rd Slide',
                'description' => 'Lorem ipsum',
            ],
        ];
    }

    public function getAllSlider(){
        return $this->slider;
    }
}
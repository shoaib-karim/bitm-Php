<?php 

namespace App\Classes;
class product {
    public $products = [];

    public function __construct() {
        $this->products = [
            0 => [
                "id" => "0",
                "image" => "assets/images/2.jpg",
                "title" => "1st Product",
                "description" => "Lorem Ipsum",
                "price" => "10",
            ],
            1 => [
                "id" => "1",
                "image" => "assets/images/3.jpg",
                "title" => "2nd Product",
                "description" => "Lorem Ipsum",
                "price" => "20",
            ],
            2 => [
                "id" => "2",
                "image" => "assets/images/4.jpg",
                "title" => "3rd Product",
                "description" => "Lorem Ipsum",
                "price" => "30",
            ],
        ];
    }

    public function getAllProducts() {
        return $this->products;
    }
}
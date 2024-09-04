<?php

namespace App\classes;
use App\classes\product;
use App\classes\slider;

class HelloWorld {
    public $message, $product, $products=[], $slider, $sliders=[];

    public function __construct()
    {
        $this-> message = "Yo Bro";  
    }

    public function index()
    {
        $product = new Product();
        $this->products = $this->product->getAllProduct();

        $slider = new Slider();
        $this->sliders = $this->slider->getAllSlider();
        return view('home', ['products' => $this->products, 'sliders' => $this->sliders]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail()
    {
        return view('detail');
    }

}


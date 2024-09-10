<?php

namespace App\classes;

use App\classes\product;
use App\classes\slider;

class HelloWorld
{
    public $message, $product, $products = [], $slider, $sliders = [], $singleSlider;

    public function __construct()
    {
        $this->message = "Yo Bro";
    }

    public function index()
    {
        $this->product = new product();
        $this->products = $this->product->getAllProducts();

        $this->slider = new slider();
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

    public function Login()
    {
        return view('login');
    }

    public function detail($id)
    {
        $this->slider = new slider();
        $this->singleSlider = $this->slider->getSliderById($id);
        return view('detail', ['slider' => $this->singleSlider]);
    }
}

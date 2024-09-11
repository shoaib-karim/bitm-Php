<?php

namespace App\classes;

use App\classes\product;
use App\classes\slider;

class HelloWorld
{
    public $message, $product, $products = [], $slider, $sliders = [], $singleSlider;

    public function __construct()
    {
        session_start();
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
        if (isset($_SESSION['id'])){
            return view('about');
        } else {
            header('Location: route.php?page=login&&message=Please Login.');
        }
        
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        return view('gallery');
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

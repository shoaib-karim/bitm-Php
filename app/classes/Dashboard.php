<?php 

namespace App\Classes;

class Dashboard
{
    // public function __construct(){
        
    // }
    public function index()
    {
        if(isset($_SESSION['id'])){
            return view('dashboard');
        }
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location: route.php?page=home');
    }
}
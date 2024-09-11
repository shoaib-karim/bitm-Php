<?php

require_once "vendor/autoload.php";

use App\classes\HelloWorld;
use App\classes\FullName;
use App\classes\Calculator;
use App\Classes\Auth;
use App\Classes\Dashboard;
use App\Classes\Series;

$helloWorld = new HelloWorld();

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {
        $helloWorld->index();
    } elseif ($_GET['page'] == 'about') {
        $helloWorld->about();
    } elseif ($_GET['page'] == 'contact') {
        $helloWorld->contact();
    } elseif ($_GET['page'] == 'gallery') {
        $helloWorld->gallery();
    } elseif ($_GET['page'] == 'detail') {
        $helloWorld->detail($_GET['id']);
    } elseif ($_GET['page'] == 'login') {
        $helloWorld->Login();
    } elseif ($_GET['page'] == 'dashboard') {
        $dashboard = new Dashboard();
        $dashboard->index();
    } elseif ($_GET['page'] == 'logout') {
        $dashboard = new Dashboard();
        $dashboard->logout();
    }
} elseif (isset($_POST['full_name_btn'])) {
    $fullName = new FullName();
    $fullName->getFullName();
} elseif (isset($_POST['result_btn'])) {
    $calculator = new Calculator($_POST);
    $calculator->index();
} elseif (isset($_POST['login_btn'])) {
    $auth = new Auth($_POST);
    $auth->loginCheck();
} elseif (isset($_POST['series_btn'])) {
    $series = new Series($_POST);
    $series->index();
}

<?php 

namespace App\Classes;

class User 
{
    public $users = [];

    public function __construct()
    {
        $this->users = 
        [
            0 => [
                'id'        => 1,
                'name'      => 'Rajib Khan',
                'email'     => 'rajib@gmail.com',
                'password'  => '123456'
            ],
            1 => [
                'id'        => 2,
                'name'      => 'shoaib Karim',
                'email'     => 'shoaibkarim159@gmail.com',
                'password'  => '1234'
            ],
            2 => [
                'id'        => 3,
                'name'      => 'Gay Minhaz',
                'email'     => 'gayminhaz@gmail.com',
                'password'  => '6666'
            ],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }
}
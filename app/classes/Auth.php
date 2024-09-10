<?php 

namespace App\Classes;
use App\Classes\User;

class Auth 
{
    public $email, $password, $user, $users = [], $status;

    public function __construct($post)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();
        $this->status = false;

        foreach ($this->users as $user)
        {
            if($user['email'] == $this->email && $user['password'] == $this->password)
            {
                $this->status = true;
                break;
            } 
        }

        if ($this->status)
        {
            header('location: route.php?page=dashboard');
        }
        else 
        {
            header('location: route.php?page=login&&message=Invalid Credentials.');
        }  
    }
}
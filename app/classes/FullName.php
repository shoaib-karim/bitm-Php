<?php


namespace App\classes;

class FullName
{
    public $firstName, $lastName, $fullName;
    public function __construct()
    {
        $this->firstName ="BASIS";
        $this->lastName ="BITM";
    }
    public function getFullName()

{
    $this->fullName =$this->firstName.' '. $this->lastName;
    echo $this->fullName;
    }

}












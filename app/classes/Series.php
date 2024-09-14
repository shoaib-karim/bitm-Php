<?php

namespace App\classes;

class Series
{
    public $startingNumber, $endingNumber, $i, $result, $choice;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
        $this->choice = $post['choice'];
    }

    public function index()
    {
        switch ($this->choice) {
            case 'odd':
                $this->result = $this->odd();
                break;
            case 'even':
                $this->result = $this->even();
                break;
            case 'all':
                $this->result = $this->all();
                break;
        }

        header("Location: route.php?page=gallery&&result=$this->result");
    }

    public function odd()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
            if ($this->i % 2 !== 0) {
                $this->result .= $this->i . ' ';
            }
        }
        return $this->result;
    }

    public function even()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
            if ($this->i % 2 == 0) {
                $this->result .= $this->i . ' ';
            }
        }
        return $this->result;
    }

    public function all()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
            $this->result .= $this->i . ' ';
        }
        return $this->result;
    }
}

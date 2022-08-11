<?php

namespace App\Classes\Workable;

use App\Classes\Worker;

class Pilot extends Worker {
    
    public function countSalary()
    {
        return $this->getSalary() * 5;
    }
}
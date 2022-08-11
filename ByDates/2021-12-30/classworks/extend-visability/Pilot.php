<?php

require_once 'Worker.php';

class Pilot extends Worker {
    
    public function countSalary()
    {
        return $this->getSalary() * 5;
    }
}
<?php

namespace App\Classes\Workable;

use App\Classes\Worker as WorkerBase;

use App\Traits\Person;

class Driver extends WorkerBase {

    use Person;
    
	private $experience;
	private $category;

	const ALLOWED_CATEGORIES = ['A', 'B', 'C'];

	function __construct($name, $age, $salary, $experience = NULL, $category = NULL)
	{
		parent::__construct($name, $age, $salary);

        // $this->experience = $experience;
        // $this->category = $category;

        if ($experience) {
            $this->setExperience($experience);
        }

        if ($category) {
            $this->setCategory($category);
        }
	}

	public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
    	if (in_array($category, self::ALLOWED_CATEGORIES) == FALSE) {
    		throw new Exception('Driver category not allowed');
    	}

        $this->category = $category;
    }

    public function countSalary()
    {
        return $this->getSalary() * 2;
    }
}
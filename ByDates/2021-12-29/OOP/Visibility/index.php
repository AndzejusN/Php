<?php

// https://www.php.net/manual/en/language.oop5.visibility.php

class MyClass
{
	public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function __construct($foo = null)
    {
    	$this->foo = $foo;
    }

    public function view()
    {
    	echo "inside {$this->public} 1 \n";
    	echo "inside {$this->protected} 2 \n";
    	echo "inside {$this->private} 3 \n";
    	echo "inside {$this->somePrivateMethod()} 4 \n";
    }

    private function somePrivateMethod()
    {
    	return 'some data';
    }
}

class AnotherClass extends MyClass
{
	public function view()
    {
    	echo "inside {$this->public} 1 \n";
    	echo "inside {$this->protected} 2 \n";
    	// echo "inside {$this->private} 3 \n";
    	// echo "inside {$this->somePrivateMethod()} 4 \n";
    }
}

$obj = new MyClass;

echo "outside {$obj->public} -1\n";
// echo "outside {$obj->protected} \n";
// echo "outside {$obj->private} \n";

$obj->view();

$obj2 = new AnotherClass;

echo "outside {$obj2->public} -1\n";
// echo "outside {$obj2->protected} \n";
// echo "outside {$obj2->private} \n";

$obj2->view();
// $obj2->somePrivateMethod();
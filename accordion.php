<?php
require_once('accordion.class.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>PHP Accordion Helper</title>
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
   <style type="text/css">
    body,html{background:lightgreen;color:#000;}
    h1{font-size:200%;margin:0;padding:.3em;color: #fff;font-weight: bold}
    #bd{background:#fff url(feedburner.png) no-repeat center;border:1em solid #fff;height: auto}
    #ft{text-align: left;padding:1em 0;color: #32B08F;}
    #ft a{color: #fff}
   </style>
   <script type="text/javascript" src="http://davidwalsh.name/dw-content/moo1.2.js"></script>
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>PHP Accordion Helper</h1></div>
   <div id="bd" role="main">

	<div class="yui-g">

<?php

    $acc = new Accordion('toggler','item');

    $acc->addItem('Class Abstraction','<p> PHP 5 introduces abstract classes and methods. It is not allowed to create an instance of a class that has been defined as abstract. Any class that contains at least one abstract method must also be abstract. Methods defined as abstract simply declare the method\'s signature they cannot define the implementation.

    When inheriting from an abstract class, all methods marked abstract in the parent\'s class declaration must be defined by the child; additionally, these methods must be defined with the same (or a less restricted) visibility. For example, if the abstract method is defined as protected, the function implementation must be defined as either protected or public, but not private. <p>

    <pre> 
abstract class person {
   
    abstract protected function write_info();
   
    public $LastName;
    public $FirstName;
    public $BirthDate;
   
    public function get_Age($today=NULL){
        //age computation function
    }
}

final class employee extends person{
    public $EmployeeNumber;
    public $DateHired;

    public function write_info(){
        echo "Writing ". $this->LastName . "\'s info to emloyee dbase table";   
        //ADD unique mandatory checking unique to EMPLOYEE ONLY
        //actual sql codes here
    }
}

final class student extends person{
    public $StudentNumber;
    public $CourseName;
   
    public function write_info(){
        echo "Writing ". $this->LastName . "\'s info to student dbase table";
        //ADD unique mandatory checking unique to STUDENT ONLY
        //actual sql codes here
    }
}


$personA = new employee;
$personB = new student;

$personA->FirstName="Joe";
$personA->LastName="Sbody";

$personB->FirstName="Ben";
$personB->LastName="Dover";

$personA->write_info();     
    </pre>

    ');

    $acc->addItem('Late Static Bindings','<p></p>

    <pre>

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
         echo __CLASS__;
    }
}

B::test();



abstract class Animal {
  protected $type, $name;

  public function __construct($aType, $aName) {
    $this->type = $aType;
    $this->name = $aName;
  }

  public function __toString() {
    return "Animal [type=$this->type, name=$this->name]";
  }
}

class Dog extends Animal {
  public function __construct($aName) {
    parent::__construct("Dog", $aName);
  }
}

class Cat extends Animal {
  public function __construct($aName) {
    parent::__construct("Cat", $aName);
  }
}

echo "My dog: " . (new Dog("Sam")) . "<br>";
echo "My cat: " . (new Cat("Fluffy")) . "<br>";
echo "Your dog: " . (new Dog("Walter")) . "<br>";
echo "Yout cat: " . (new Cat("Ginger"));

    </pre> 

    ');

    $acc->addItem('Overloading','<p> Overloading in PHP provides means to dynamically "create" properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.

The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms "inaccessible properties" and "inaccessible methods" to refer to this combination of declaration and visibility.

All overloading methods must be defined as public. <p>

    <pre>

 __set() is run when writing data to inaccessible properties.

__get() is utilized for reading data from inaccessible properties.

__isset() is triggered by calling isset() or empty() on inaccessible properties.

__unset() is invoked when unset() is used on inaccessible properties. 



class Example{
    public function __call($name, $arguments){
        switch($name){
            case \'foo\':
                switch(count($arguments)){
                    case 2:
                        echo \'You called "foo" with two arguments.<br>\' . PHP_EOL;
                        break;
                    case 3:
                        echo \'You called "foo" with three arguments.<br>\' . PHP_EOL;
                        break;
                    default:
                        echo \'Error: Invalid number of arguments to "foo."<br>\' . PHP_EOL;
                        break;
                }
                break;
            default:
                echo "Error: Call to undefined function "$name."<br>" . PHP_EOL;
        }
    }
}

$test = new Example;
$test->foo(\'bar\', \'baz\');
$test->foo(\'bar\', \'baz\', \'fez\', \'fap\');
$test->bar(); 
    </pre>

',1);

    $acc->output();

    echo$acc->addStyle();  

    echo'<script type="text/javascript">'.$acc->output_js().'</script>';

?>

	</div>

	</div>
   <div id="ft" role="contentinfo"><p><a href="http://adrianstatescu.com">Written By Adrian Statescu</a></p></div>
</div>
</body>
</html>

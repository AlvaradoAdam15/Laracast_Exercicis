<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 15:06
 */

class Person {

    public $name;
    public $age;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getAge($age){
        return $this->age * 365;
    }

    public function setAge($age){
        if ($age < 18){
            throw new Exception ("Es menor d'edat");
        }
        $this->age = $age;
    }
}

$adam = new Person('Adam');
$adam->setAge(19);
//$adam->age = 3;

var_dump($adam->getAge());
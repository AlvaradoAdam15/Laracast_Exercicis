<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 20:26
 */

class Person
{
    public $age = 1;

    public function haveBirthday()
    {
       $this->age += 1;
    }

    public function age()
    {
        return $this->age;
    }
}

$adam = new Person;
$adam->haveBirthday();
$adam->haveBirthday();
echo $adam->age(), "\n";

$pau = new Person;
$pau->haveBirthday();
echo $pau->age(), "\n";

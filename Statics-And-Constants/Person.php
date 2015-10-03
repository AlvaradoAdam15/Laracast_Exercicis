<?php

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 20:19
 */

class Person
{
    public static $age = 1;

    public function haveBirthday()
    {
        static::$age +=1;
    }
}

$adam = new Person;
$adam->haveBirthday();

$pau = new Person;
$pau->haveBirthday();

echo Person::$age;
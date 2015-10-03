<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 17:58
 */

class Person {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
}

class Bussines {

    protected $staff;

    public function __construct(Staff $staff){
        $this->staff = $staff;
    }

    public function hire(Person $person){
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff {

    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$adam = new Person('Adam');

$staff = new Staff([$adam]);

$pau = new Bussines($staff);

$pau->hire(new Person('Andrea'));

//var_dump($staff);
var_dump($pau->getStaffMembers());
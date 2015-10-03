<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 18:27
 */

use Acme\Users\Person;
use Acme\Bussines;
use Acme\Staff;

$adam = new Person('Adam');

$staff = new Staff([$adam]);

$pau = new Bussines($staff);

$pau->hire(new Person('Andrea'));

//var_dump($staff);
var_dump($pau->getStaffMembers());
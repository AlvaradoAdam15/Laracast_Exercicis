<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 18:25
 */

namespace Acme\Users;

class Person {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 17:58
 */

namespace Acme;

use Acme\Users\Person;

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

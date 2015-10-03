<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 20:13
 */

class Math {
    public function add()
    {
        return array_sum(func_get_args());
    }
}

$math = new Math;
var_dump($math->add(1, 2, 3));
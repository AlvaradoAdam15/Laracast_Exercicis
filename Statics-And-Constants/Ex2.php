<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 20:17
 */

class Math {
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

echo Math::add(1, 2, 3);
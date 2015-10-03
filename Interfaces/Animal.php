<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 17:00
 */

interface Animal{
    public function communicate();

}

class Dog implements Animal{
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal{
    public function communicate()
    {
        return 'meow';
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 15:26
 */
class Mother {

    public function getEyeCount()
    {
        return 2;
    }
}

class Child extends Mother {

}

(new Child)->getEyeCount(); //Agafara la funcio de la classe Mare "2"
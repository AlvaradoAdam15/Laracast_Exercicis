<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 19:11
 */

class RegisterUser {

    public function execute(array $data, $listener)
    {
        var_dump('Registrant Usuari.');

        $listener->UserRegisterSuccesfully();
    }
}
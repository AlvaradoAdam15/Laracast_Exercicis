<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 18:59
 */

class AuthController{

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register()
    {
        $this->registration->execute([], $this);
    }
    
    public function UserRegisterSuccesfully()
    {
        var_dump('Creacio amb exit!');
    }
    
    public function UserRegisterFailed()
    {
        var_dump('Error en la creacio. Tornan enrere');
    }
}

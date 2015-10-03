<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 19:26
 */
require "src/AuthController.php";
require "src/RegisterUser.php";

$registration = new RegisterUser();
$authController = new AuthController($registration);

$authController->register();
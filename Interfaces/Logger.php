<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 17:05
 */

interface Logger{
    public function execute($message);
}

class LogToFile implements Logger{
    public function execute($message)
    {
        var_dump('log the message to a file:' . $message);
    }
}

class LogToDatabase implements Logger{
    public function execute($message)
    {
        var_dump('log the message to a DataBase:' . $message);
    }
}

//... (Podriem ficar mes classes)

class UserController{

    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'Adam';

        $this->logger->execute($user);
    }
}

$controller = new UserController(new LogToDatabase);

$controller->show();
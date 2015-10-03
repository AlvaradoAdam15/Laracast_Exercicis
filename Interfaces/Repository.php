<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 17:49
 */
interface Repository {
    public function save($data);
}

class MongoRepository implements Repository{
    public function save($data)
    {

    }
}

class FileRepository implements Repository{
    public function save($data)
    {

    }
}
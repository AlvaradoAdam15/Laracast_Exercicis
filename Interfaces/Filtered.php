<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 17:52
 */

interface CanBeFiltered {
    public function filter();
}

class Favorited implements CanBeFiltered{
    public function filter()
    {

    }
}

class Unwached implements CanBeFiltered{
    public function filter()
    {

    }
}

class Dificulty implements CanBeFiltered{
    public function filter()
    {

    }
}
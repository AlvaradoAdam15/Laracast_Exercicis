<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 03/10/15
 * Time: 17:40
 */

interface CastsToJson {

    public function toJson()
    {

    }
}

class User implements CastsToJson {}
class Collection implements CastsToJson{}
<?php

namespace  Luna\services;

use Luna\Core\Service;

use Luna\Andromeda\Andromeda;

class DB extends Service
{
    public static function init($info = null)
    {
        parent::init($info); // TODO: Change the autogenerated stub
    }

    public static function config($info = null)
    {
        parent::config($info); // TODO: Change the autogenerated stub

        Andromeda::config();
    }
}
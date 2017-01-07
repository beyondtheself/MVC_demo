<?php

/**
 * Created by PhpStorm.
 * User: Stone
 * Date: 2017/1/6
 * Time: 11:31
 */
class ModelFactory
{
    static $all_model = array();

    static function M($modeName)
    {
        if (!isset(static::$all_model[$modeName]) ||
            !(static::$all_model[$modeName] instanceof $modeName)
        ) {
            static::$all_model[$modeName] = new $modeName;
        }

        return static::$all_model[$modeName];
    }
}
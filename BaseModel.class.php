<?php

/**
 * Created by PhpStorm.
 * User: Stone
 * Date: 2017/1/6
 * Time: 10:19
 */
require './MySQLDB.class.php';

class BaseModel
{
    protected $_dao = null;

    function __construct()
    {
        $config = array(
            'host'=>'localhost',
            'port' => 3306,
            'user' => 'root',
            'pass' => 'redpass123',
            'charset' => 'utf8',
            'dbname' => 'mvcDemo',
        );

        $this->_dao = MySQLDB::GetInstance($config);
    }
}
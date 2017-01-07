<?php

/**
 * Created by PhpStorm.
 * User: Stone
 * Date: 2017/1/6
 * Time: 10:26
 */
header("Content-type:text/html; charset=utf-8");
require './BaseModel.class.php';

class UserModel extends BaseModel
{
    function GetAllUser()
    {
        $sql = 'SELECT * FROM user_list';
        $data = $this->_dao->GetRows($sql);
        return $data;
    }

    function GetUserCount()
    {
        $sql = 'SELECT count(*) FROM user_list';
        $data = $this->_dao->GetOneData($sql);
        return $data;
    }

    function DelUserById($id)
    {
        $sql = "DELETE FROM user_list WHERE id = $id";
        $data = $this->_dao->exec($sql);
        return $data;
    }

    function GetUserInfoById($id)
    {
        $sql = "SELECT * FROM user_list WHERE id = $id";
        $data = $this->_dao->GetOneRow($sql);
        return $data;
    }
}
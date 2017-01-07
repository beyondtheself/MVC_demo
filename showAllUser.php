<?php
/**
 * Created by PhpStorm.
 * User: Stone
 * Date: 2017/1/6
 * Time: 10:31
 */

require './UserModel.class.php';
require './ModelFactory.class.php';

//$obj_user = new UserModel()
$obj_user = ModelFactory::M('UserModel');
if (!empty($_GET['act']) && $_GET['act'] == 'del') {
    $id = $_GET['id'];
    $obj_user->DelUserById($id);
    echo "<font color=red>删除成功</font>";
    echo "<a href='?'>返回</a>";
} else if (!empty($_GET['act']) && $_GET['act'] == 'detail') {
    $id = $_GET['id'];
    $obj_user->GetUserInfoById($id);
    include './UserInfo.html';
} else{
    $data1 = $obj_user->GetAllUser();
    $data2 = $obj_user->GetUserCount();
    include './showAllUser.html';
}


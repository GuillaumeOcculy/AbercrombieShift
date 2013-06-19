<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 03:45
 * To change this template use File | Settings | File Templates.
 */

require_once('../config/PDOManager.php');

require_once('../model/User.php');
require_once('../mappers/UserMapper.php');


extract($_POST);


if(isset($email) && isset($password)){
    $user = new User(null, null, null, $email, $password, null, null);
    $result = UserMapper::readUser($user);

}else{
    echo 'wrong email';
}


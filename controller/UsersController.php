<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 26/03/13
 * Time: 11:11
 * To change this template use File | Settings | File Templates.
 */

require_once('../config/PDOManager.php');

require_once('../model/User.php');
require_once('../mappers/UserMapper.php');


//register
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['job']) ){
    if($_POST['password'] == $_POST['confirmPassword']){
        $user = new User(null,$_POST["firstname"], $_POST["lastname"], $_POST['email'], $_POST['password'], $_POST['job']);
        UserMapper::createUser($user);
    }else{
        echo 'Password not match with Confirm Password';
    }
}


//login
if(isset($_POST['email']) && isset($_POST['password'])){
    $user = new User(null, null, null, $_POST['email'], $_POST['password'], null);
    UserMapper::readUser($user);
}else{
    echo 'wrong login';
}


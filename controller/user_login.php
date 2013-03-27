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
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    $user = new User('', '', '', $_POST['email'], $_POST['password'], '');
    UserMapper::readUser($user);
    $_SESSION['firstname'] = $user->getFirstname();
    $_SESSION['lastname'] = $user->getLastname();
    $_SESSION['email'] = $user->getEmail();
    $_SESSION['job'] = $user->getJob();
    header('Location:../view/dashboard.php');
}else{
    echo 'wrong login';
}


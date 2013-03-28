<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 28/03/13
 * Time: 03:30
 * To change this template use File | Settings | File Templates.
 */

require_once('../mappers/UserMapper.php');
require_once('../model/User.php');
session_start();

echo 'id : ' . $_SESSION['id'] . '<br>';
echo 'firstname : ' . $_SESSION['firstname'] . '<br>';
echo 'lastname : ' . $_SESSION['lastname'] . '<br>';
echo 'email : ' . $_SESSION['email'] . '<br>';
echo 'job : ' . $_SESSION['job'] . '<br>';

?>

<a href="deconect.php">deconect</a>
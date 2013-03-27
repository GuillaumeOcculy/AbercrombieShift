<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 04:04
 * To change this template use File | Settings | File Templates.
 */

session_start();

echo $_SESSION['firstname'] .'<br>';
echo $_SESSION['lastname'] .'<br>';
echo $_SESSION['email'] .'<br>';
echo $_SESSION['job'];

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 04:29
 * To change this template use File | Settings | File Templates.
 */

session_start();

session_destroy();

header('Location:../view/index.php');
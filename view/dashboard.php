<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 04:04
 * To change this template use File | Settings | File Templates.
 */
require_once('../model/User.php');
require_once('../mappers/ShiftMapper.php');
require_once('../mappers/UserMapper.php');
require_once('../model/Shift.php');


echo $_SESSION['user']->getFirstName();

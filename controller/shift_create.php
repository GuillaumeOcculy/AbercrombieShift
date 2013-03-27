<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 05:09
 * To change this template use File | Settings | File Templates.
 */

require_once('../config/PDOManager.php');

require_once('../model/Shift.php');
require_once('../mappers/ShiftMapper.php');
session_start();

if(isset($_POST['time']) && isset($_POST['date']) && isset($_POST['message'])){
    $shift = new Shift(null, $_POST['time'], $_POST['date'], $_POST['message'], $_SESSION['email'],$_SESSION['job']);
    ShiftMapper::createShift($shift);
    header('Location:../view/dashboard.php');
}
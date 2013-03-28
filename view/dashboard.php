<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 04:04
 * To change this template use File | Settings | File Templates.
 */
require_once('../mappers/ShiftMapper.php');
require_once('../model/Shift.php');
session_start();

echo $_SESSION['firstname'] .'<br>';
echo $_SESSION['lastname'] .'<br>';
echo $_SESSION['email'] .'<br>';
echo $_SESSION['job'];

$shift = new Shift(null, null, null, null, null, $_SESSION['job']);

$a = ShiftMapper::readShiftByJob($shift);
echo $a->time;
echo $a->date;
?>

<form action="../controller/shift_create.php" method="post">

    <input type="time" name="time" placeholder="time">
    <input type="date" name="date" placeholder="date">
    <input type="text" name="message" placeholder="Tape your message">
    <button type="submit">valid</button>

</form>

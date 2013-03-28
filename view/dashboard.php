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
echo $_SESSION['job'] .'<br>';

$shift = new Shift(null, null, null, null, null, $_SESSION['job']);
try{

    $result = ShiftMapper::readShiftByJob($shift);

    foreach ($result as $shift) {//t'avais oublié le $ xd
        echo $shift->time . '<br>';
    }


}catch(Exception $e){
    echo '';
}
?>

<a href="profil.php">profil</a>

<form action="../controller/shift_create.php" method="post">

    <input type="time" name="time"  value="10:00"  placeholder="time">
    <input type="date" name="date" max="2013-12-31" min="2013-03-07" placeholder="date">
    <input type="text" name="message" placeholder="Tape your message">
    <button type="submit">valid</button>

</form>

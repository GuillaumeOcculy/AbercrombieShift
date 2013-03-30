<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 28/03/13
 * Time: 06:39
 * To change this template use File | Settings | File Templates.
 */
session_start();
?>



<form action="../controller/comment_create.php" method="post">

    <input type="text" name="message" placeholder="Tape your answer">
    <button type="submit">valid</button>

</form>
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 26/03/13
 * Time: 11:10
 * To change this template use File | Settings | File Templates.
 */

?>


<h1>Register</h1>
<form action="../controller/UsersController.php" method="post">

    <input type="text" name="firstname" placeholder="firstname">
    <input type="text" name="lastname" placeholder="lastname">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="confirmPassword" placeholder="confirmpassword">
    <select name="job">
        <option value="cashier">Cashier</option>
        <option value="impact_1">Impact 1</option>
        <option value="impact_2">Impact 2</option>
        <option value="model">Model</option>
        <option value="ops">OPS</option>
        <option value="stylist">Stylist</option>
    </select>
    <button type="submit">valid</button>

</form>



    <h1>Login</h1>

<form action="../controller/UsersController.php" method="post">

    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button type="submit">valid</button>

</form>
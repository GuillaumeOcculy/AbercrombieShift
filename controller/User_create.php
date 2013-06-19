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




extract($_POST);
if(empty($first_name)){
    echo 'champs manquants';
}
else{
    if (isset($_POST)){
        if ( !empty($_POST)){
            if($password == $confirm_password){


                $user = new User(null, $first_name, $last_name, $email, $password, $job, null);

                try{
                    UserMapper::createUser($user);
                    echo "good" ;

                }catch (Exception $e){
                    echo "probleme";
                }



                // header('Location:../view/dashboard.php');
            }else{
                echo 'Password not match with Confirm Password';
            }
        }

    }


}


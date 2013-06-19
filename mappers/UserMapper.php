<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 26/03/13
 * Time: 19:43
 * To change this template use File | Settings | File Templates.
 */
require_once('../mappers/DataMapper.php');
session_start();
class UserMapper extends DataMapper
{

public static function createUser($user){
    $query = self::$pdo->prepare(
        "INSERT INTO users SET
        first_name = :first_name,
        last_name = :last_name,
        email = :email,
        password = :password,
        job = :job"
    );

    $query->execute(array(
        ':first_name' => $user->getFirstName(),
        ':last_name' => $user->getLastName(),
        ':email' => $user->getEmail(),
        ':password' => $user->getPassword(),
        ':job' => $user->getJob()
    ));

    return $query;
}

    public static function readUser($user){
        $query = self::$pdo->prepare(
            "SELECT * FROM users WHERE
            email = :email AND
            password =:password"
        );

       $query->execute(array(
           ':password' =>$user->getPassword(),
            ':email' =>$user->getEmail()
        ));


        $result = $query->fetch(PDO::FETCH_OBJ);
        if($result){
            $user = new User($result->id, $result->first_name, $result->last_name, $result->email, null, $result->job, null);

            $_SESSION['user'] = $user;
            header('Location:../view/dashboard.php');
        }else{
            echo "compte inexistant";
        }




    }






}

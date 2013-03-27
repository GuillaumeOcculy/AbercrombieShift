<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 26/03/13
 * Time: 19:43
 * To change this template use File | Settings | File Templates.
 */
require_once('../mappers/DataMapper.php');
class UserMapper extends DataMapper
{

public static function createUser($user){
    $query = self::$pdo->prepare(
        "INSERT INTO users SET
        firstname = :firstname,
        lastname = :lastname,
        email = :email,
        password = :password,
        job = :job"
    );

    $query->execute(array(
        'firstname' => $user->getFirstname(),
        'lastname' => $user->getLastname(),
        'email' => $user->getEmail(),
        'password' => $user->getPassword(),
        'job' => $user->getJob()
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
        $user->setFirstname($result->firstname);
        $user->setLastname($result->lastname);
        $user->setEmail($result->email);
        $user->setJob($result->job);
        return $user;
    }






}

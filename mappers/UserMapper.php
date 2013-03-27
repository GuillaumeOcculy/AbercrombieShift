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
}

    public static function readUser($user){
        $query = self::$pdo->prepare(
            "SELECT email FROM users WHERE
            email = :email AND
            password =:password"
        );


       $sql= $query->execute(array(
            ':email' =>$user->getEmail(),
            ':password' =>$user->getPassword()
        ));

        print("Retourne la ligne suivante en tant qu'objet anonyme ayant les noms de colonnes comme propriétés\n");

        $result = $sql->fetch(PDO::FETCH_OBJ);
           return $result;
    }






}

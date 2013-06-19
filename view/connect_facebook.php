<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 18/06/13
 * Time: 22:17
 * To change this template use File | Settings | File Templates.
 */

$DB = new PDO('mysql:host=localhost;dbname=abercrombieshift', 'root','');
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

require('../facebook-php-sdk-master/src/facebook.php');

$facebook = new Facebook(array(
    'appId' => '491479200920107',
    'secret' => '48d6d6c33a052b4e1aba9e17831adde0',
    'session' => true
));

$user = $facebook->getUser();

    if(empty($user)){
        header('Location:'.$facebook->getLoginUrl(array(
            'req_perms' => 'email',
            'scope' => 'email',
            'locale' => 'fr_FR'
        )));
    }else{
        try{
           $me = $facebook->api('/me');
           // print_r($me);
        }catch (Exception $e){

        }

        if(isset($me)){
            $fql = "SELECT first_name, last_name, email FROM user WHERE uid=$user";
            $param = array(
                'method' => 'fql.query',
                'query' => $fql,

                'callback' => ''

            );
        $fb = $facebook->api($param);
            $fb = $fb[0];


            $users = $DB->query("SELECT * FROM users WHERE facebook_id='.$user'");
            $users->fetchAll();

            if(!empty($users)){
                $first_name = $fb['first_name'];
                $last_name = $fb['last_name'];
                $email = $fb['email'];
                $password = sha1(uniqid());
                $DB->exec("INSERT INTO
                            users (first_name, last_name, email, password, facebook_id)
                            VALUES ('$first_name', '$last_name', '$email', '$password', '$user') ");
                $id = $DB->lastInsertId();
            }else{
                echo "non empty";
            }

        }

    }
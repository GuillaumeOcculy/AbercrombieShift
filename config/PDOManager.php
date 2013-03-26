<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 26/03/13
 * Time: 19:24
 * To change this template use File | Settings | File Templates.
 */
require_once('../mappers/DataMapper.php');

class PDOManager
{
    private static $PDO_DB ="abercrombieshift";
    private static $PDO_USER ="root";
    private static $PDO_PASSWORD ="";


    public static function init(){
        static $instance = null;
        if($instance == null){
            $instance = new PDO("mysql:host=localhost;dbname=". self::$PDO_DB, self::$PDO_USER, self::$PDO_PASSWORD);
            $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            DataMapper::setPdo($instance);
        }
    }
}

PDOManager::init();

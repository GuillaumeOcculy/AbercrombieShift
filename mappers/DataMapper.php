<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 26/03/13
 * Time: 19:42
 * To change this template use File | Settings | File Templates.
 */
class DataMapper
{
    protected static $pdo;

    public static function setPdo($pdo){
        self::$pdo = $pdo;
    }
}

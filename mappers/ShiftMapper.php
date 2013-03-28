<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 05:12
 * To change this template use File | Settings | File Templates.
 */

require_once('../mappers/DataMapper.php');
class ShiftMapper extends DataMapper
{

    public static function createShift($shift){
        $query = self::$pdo->prepare(
            "INSERT INTO shifts SET
            time = :time,
            date = :date,
            message = :message,
            author = :author,
            job = :job"
        );

        $query->execute(array(

            'time' => $shift->getTime(),
            'date' => $shift->getDate(),
            'message' => $shift->getMessage(),
            'author' => $shift->getAuthor(),
            'job' => $shift->getJob()
        ));

    }

    public static function readShiftByJob($shift){
        $query = self::$pdo->prepare(
            "SELECT * FROM shifts WHERE
            job =:job"
        );

        $query->execute(array(
            'job' =>$shift->getJob()
        ));

       $shift = $query->fetchAll(PDO::FETCH_OBJ);

      return $shift ;

    }



}

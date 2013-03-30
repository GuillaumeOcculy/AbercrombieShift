<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 06:23
 * To change this template use File | Settings | File Templates.
 */

require_once('../mappers/DataMapper.php');
class CommentMapper extends DataMapper
{

    public static function createComment($comment){
        $query = self::$pdo->prepare(
            "INSERT INTO comments SET
            message = :message,
            author = :author,
            job = :job"
        );

        $query->execute(array(
           'message' =>  $comment->getMessage(),
            'author' => $comment->getAuthor(),
            'job' => $comment->getJob()
        ));
    }

    public static function readCommentByPost(){

    }

}

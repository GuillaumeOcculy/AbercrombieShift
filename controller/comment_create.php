<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 28/03/13
 * Time: 06:44
 * To change this template use File | Settings | File Templates.
 */

require_once('../model/Comment.php');
require_once('../mappers/CommentMapper.php');
session_start();

if(isset($_POST['message'])){
    $comment = new Comment(null, $_POST['message'], $_SESSION['email'], $_SESSION['job']);
    CommentMapper::createComment($comment);
    header('Location:../view/comment.php');
}
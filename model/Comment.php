<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 06:21
 * To change this template use File | Settings | File Templates.
 */
class Comment
{

    private $id, $message, $author, $job;

    function __construct($id, $message, $author, $job)
    {
        $this->author = $author;
        $this->id = $id;
        $this->job = $job;
        $this->message = $message;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setJob($job)
    {
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

}

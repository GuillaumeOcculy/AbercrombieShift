<?php
/**
 * Created by JetBrains PhpStorm.
 * User: occul_000
 * Date: 27/03/13
 * Time: 05:03
 * To change this template use File | Settings | File Templates.
 */
class Shift
{

  private $id, $time, $date, $message, $author, $job;

    function __construct($id, $time, $date, $message, $author, $job)
    {
        $this->author = $author;
        $this->date = $date;
        $this->id = $id;
        $this->message = $message;
        $this->time = $time;
        $this->job = $job;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setJob($job)
    {
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;
    }




}

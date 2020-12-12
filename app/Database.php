<?php


class Database
{
    protected $dbname;
    protected $host;
    protected $user;
    protected $pass;

    public function __construct($dbname, $host, $user, $pass)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
    }
}

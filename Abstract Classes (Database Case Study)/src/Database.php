<?php


abstract class Database
{
    protected $_handler;
    protected $statement;
    protected $host, $db_name, $db_user, $db_password;
    
    public function __construct($host, $db_name, $db_user, $db_password)
    {
       $this->host = $host;
       $this->db_name = $db_name;
        $this->db_password = $db_password;
       $this->db_user = $db_user;
    }
    
    abstract public function connect();
    
    public function select($sql)
    {
        $this->statement = $this->_handler->query($sql);
        return $this;
    }
    
    public function getConnection()
    {
        return $this->_handler;
    }
    
    abstract public function get();
}
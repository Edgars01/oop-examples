<?php


class PDOClient extends Database
{
    protected $dsn;
    
    public function __construct($driver, $host, $db_name, $db_user, $db_password)
    {
        parent::__construct($host, $db_name, $db_user, $db_password);
        $this->dsn = "{$driver}:host={$this->host};dbname={$this->db_name}";
    }
    
    public function connect()
    {
        try{
            $this->_handler = new PDO($this->dsn, $this->db_user, $this->db_password);
        }catch (PDOException $ex){
            die($ex->getMessage());
        }
        return $this;
    }
    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}
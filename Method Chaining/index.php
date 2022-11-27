<?php

class Database {
    static private $pdo;
    static public $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;
    
    public static function connect(string $method)
    {
        static::$pdo = $method;
        return new static;
    }
    
    public function table(string $name)
    {
        $this->table = $name;
        return $this;
    }
    
    public function insert(array $data)
    {
        var_dump('Connected to the database using '. self::$pdo);
        var_dump("INSERTING INTO {$this->table} VALUES(".json_encode($data).")");
    }
}

header('Content-Type:text/plain', true);
Database::connect('pdo')->table('users')->insert(['username' => 'Terry', 'password' => 'secret']);
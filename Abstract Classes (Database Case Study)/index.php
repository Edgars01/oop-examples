<?php
spl_autoload_register(function($className){
    include 'src/'.$className . '.php';
});

//header('Content-Type:text/plain', true);
//$pdo = (new PDOClient('mysql', 'localhost', 'store', 'store', 'secret'))->connect();
$mysqli = (new MySQLiClient('localhost', 'store', 'store', 'secret'))->connect();

$products = $mysqli->select("SELECT * FROM products")->get();

//$handler = $mysqli->getConnection();
//$p = $handler->query("Select * from products where id > 6")->fetch_all();

foreach ($products as $product){
    var_dump($product->name);
}


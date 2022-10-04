<?php

define('HOST', 'localhost');
define('DATABASENAME', 'beta');
define('USER', 'root');
define('PASSWORD','');

class Connect{
    protected $connection;

    function construct()
    {
        $this->connectDatabase();
    }
    function connectDatabase()
    {
        try 
        {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
        }
        catch (PDOException $e)
        {
            echo "Error!".$e->getMessage();
            die();
        }
    }
}

$testConection = new Connect();

?>


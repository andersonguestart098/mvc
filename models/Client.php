<?php

require_once('./configuration/connect.php');

class ClientModel extends Connect{
    private $table;

    function construct()
    {
        parent::construct();
        $this->table = 'clients';
    }

    function getAll()
    {
        $sqlSelect = $this->$connection->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
}

?>
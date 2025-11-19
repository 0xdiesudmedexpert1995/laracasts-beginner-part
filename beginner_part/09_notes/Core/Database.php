<?php

namespace Core;
use PDO;

class Database
{
    public $connection;
    public $statement;
    public function __construct(array $config, $username = 'root', $password =''){
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC
        ];
        $dsn = 'mysql:'.str_replace('&', ';', http_build_query($config));
        try {
            //code...
            $this->connection = new PDO($dsn, $username, $password, $options);
        } catch (\Throwable $th) {
            echo '<pre>';
            echo 'Connection refused. Database can`t be reached. '.$th->getMessage();
            echo '</pre>';
        }
    }

    public function query($sql, $values = []): Database{
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($values);
        return $this;
    }

    public function fetch(){
        return $this->statement->fetch();
    } 

    public function find(){
        return $this->fetch();
    }

    function findOrFail(){
        $result = $this->find();
        if(!$result) abort(404);
        return $result;
    }

    function get(){
        return $this->statement->fetchAll();
    }

}
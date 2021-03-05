<?php

class Database
{

    public $pdo;

    public function getPDO()
    {

        $dsn = 'mysql:dbname=gites;host=localhost';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password);
            $this->pdo = $pdo;
            //echo 'Connection ok';
            return $pdo;
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();

        }
    }
}



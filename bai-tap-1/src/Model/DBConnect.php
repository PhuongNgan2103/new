<?php
namespace App\Model;


use PDO;
use PDOException;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=product_information';
        $this->user = 'root';
        $this->password = '';
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->user, $this->password);
            return $conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public function query($statement)
    {
        $stmt = $this->connect()->query($statement);
        return $stmt->fetchAll();
    }

    public function execute($statement)
    {
        $stmt = $this->connect()->prepare($statement);
        $stmt->execute();
    }
}
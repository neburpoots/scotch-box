<?php
// session_start();
// $_SESSION['login']=false;
// $_SESSION['admin']=true;
// $_SESSION['username']="test";

class dbConnection {
    public $servername = "localhost";
    public $portnr = "3306";
    public $dbname = "scotchbox";
    public $username = "root";
    public $password = "root";
    
    public function startdbConnection() {
        try {
            $connection = new PDO("mysql:
                host=$this->servername,
                dbname=$this->dbname,
                port=$this->portnr,
                $this->username,
                $this->password
            ");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "connected succesfully";
        } catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connection;
    }

    public function stopDbConnection($connection) {
        $this->connection = null;
    }

    public function sentQuery($sql) {
        $connection = $this->startdbConnection;

        if($connection->query($sql)) {

        } else {
            echo "Error in query " . $connection->error;
        }

        $this->stopDbConnection($connection);
    }

}
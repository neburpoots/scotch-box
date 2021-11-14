<?php

include('dbConnection.php');

class ProductsController extends dbConnection {

    
    public function getProducts() {
        $connection = dbConnection::startDbConnection();

        $sql = 'SELECT * FROM Products';

        $output = $connection->prepare($sql);
        $output->execute();

        $result = $output->setFetchMode(PDO::FETCH_ASSOC);
        

        $items = array();

        foreach ($stmt->fetchAll() as $arr) {
            print_r($arr);
            $items[] = $arr;
        }
        echo 'Count of Order Items...', count($items);
        
    }
}





?>
<?php
require_once '../Model/Flower.php';

class FlowerDao {
    private $connection;
    
    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "", "FlowerShop");
        $this->connection->set_charset("utf8");
    }
    
    public function getFavouriteFlower() {
        $query = "SELECT * FROM `Flower` LIMIT 5";
        /* @var $result mysqli_result */
        $result = $this->connection->query($query);
        
        $list = array("");
        if($result->num_rows > 0) {
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $flower = new Flower();
                $flower->setId($row["Id"]);
                $flower->setName($row["Name"]);
                $flower->setPrice($row["Price"]);
                $flower->setQuantity($row["Quantity"]);
                $flower->setImagePath($row["ImagePath"]);
                $flower->setIdCategory($row["IdCategory"]);
                $flower->setIdColor($row["IdColor"]);
                $list[$i] = $flower;
                $i++;
            }
        }
        return $list;
    }
}

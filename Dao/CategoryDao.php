<?php
require_once '../Model/Category.php';

class CategoryDao {
    private $connection = "";
    
    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "", "FlowerShop");
        $this->connection->set_charset("utf8");
    }
    
    public function getListCategory() {
        $query = "SELECT * FROM Category";
        
/* @var $result mysqli_result */
        $result = $this->connection->query($query);
        
        $list = array("");
        if($result->num_rows > 0) {
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $category = new Category();
                $category->setId($row["Id"]);
                $category->setName($row["Name"]);
//                var_dump($category);
                $list[$i] = $category;
                $i++;
            }
        }
        return $list;
    }
}

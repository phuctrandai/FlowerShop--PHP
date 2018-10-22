<?php
session_start();

require_once '../Dao/CategoryDao.php';
require_once '../Model/Category.php';
require_once '../Dao/FlowerDao.php';
require_once '../Model/Flower.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    doPost();
}
else if($_SERVER["REQUEST_METHOD"] == "GET") {
    doGet();
}

function doPost() {
    doGet();
}

function doGet() {
    getListCategory();
    getFavouriteFlower();
    header("Location: ../home.php");
}

function getListCategory() {
    $cateDao = new CategoryDao();
    $categoryList = $cateDao->getListCategory();
//    var_dump($categoryList);
    
    $_SESSION['listCategory'] = serialize($categoryList);
//    var_dump($_SESSION['listCategory']);
}

function getFavouriteFlower() {
    $flowDao = new FlowerDao();
    $flowerList = $flowDao->getFavouriteFlower();
    
    $_SESSION['favouriteFlower'] = serialize($flowerList);
}
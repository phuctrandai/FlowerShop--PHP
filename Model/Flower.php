<?php

class Flower {
    private $id;
    private $name;
    private $price;
    private $quantity;
    private $imagePath;
    private $idCategory;
    private $idColor;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getImagePath() {
        return $this->imagePath;
    }

    function getIdCategory() {
        return $this->idCategory;
    }

    function getIdColor() {
        return $this->idColor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    function setIdCategory($idCategory) {
        $this->idCategory = $idCategory;
    }

    function setIdColor($idColor) {
        $this->idColor = $idColor;
    }

    public function __construct() {
        
    }
}

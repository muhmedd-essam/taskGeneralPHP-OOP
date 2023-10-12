<?php  

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $quantity;

    public function __construct($id, $name, $description, $price, $quantity) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function __get($prop){
        echo "the property ['. $prop .'] is not found or cant be access";
    }
    public function __set($prop, $val){
        echo "the property ['. $prop .'] is not found or cant be access";
        echo "and you can't assign this value: ['. $val .']";
    }

    public function __call($method){
        echo "the property ['. $method .'] is not found or cant be access";
    }

    public function updateProduct($name, $description, $price, $quantity) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }
} ?>
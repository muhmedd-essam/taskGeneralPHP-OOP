<?php

require_once 'Product.php';

class Inventory {
    private $products;

    public function __construct() {
        $this->products = array();
    }

    public function __get($prop){
        echo "the property ['. $prop .'] is not found or cant be access";
    }
    public function __set($prop, $val){
        echo "the property ['. $prop .'] is not found or cant be access";
        echo "and you can't assign this value: ['. $val .']";
    }

    public function __call($method, $prop){
        echo "the property ['. $method .'] is not found or cant be access";
    }

    public function addProduct(Product $product) {
        $this->products[$product->getId()] = $product;
    }

    public function updateProduct($productId, $name, $description, $price, $quantity) {
        if (isset($this->products[$productId])) {
            
            $product = $this->products[$productId];
            $product->updateProduct($name, $description, $price, $quantity);
            
        }
    }

    public function removeProduct($productId) {
        if (isset($this->products[$productId])) {
            unset($this->products[$productId]);
        }
    }

    public function displayInventory() {
        foreach ($this->products as $product) {
            echo "ID: " . $product->getId() . "\n";
            echo "Name: " . $product->getName() . "\n";
            echo "Description: " . $product->getDescription() . "\n";
            echo "Price: " . $product->getPrice() . "\n";
            echo "Quantity: " . $product->getQuantity() . "\n";
            echo "-------------------------\n";
        }
    }
    public function getProducts() {
        return $this->products;
    }
}



// Example usage:
$inventory = new Inventory();
echo "<pre>";
// Add products
$product1 = new Product(1, "Product 1", "Description 1", 10.99, 50);
echo "<pre>";
$product2 = new Product(2, "Product 2", "Description 2", 15.99, 30);
echo "<pre>";
$inventory->addProduct($product1);
$inventory->addProduct($product2);
echo "<pre>";
// Update product information
// $inventory->updateProduct(1, "Updated Product 1", "Updated Description 1", 12.99, 40);
echo "<pre>";
// Remove a product
// $inventory->removeProduct(2);
echo "<pre>";
// Display inventory
$inventory->displayInventory();
echo "<pre>";

?>

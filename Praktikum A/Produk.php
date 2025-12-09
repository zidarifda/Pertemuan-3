<?php
class Product {
    public function __construct() {
        echo "Objek Product dibuat\n";
    }
}

$p = new Product();

echo "\n";

class ProductWithName {
    public function __construct(string $name) {
        echo "Produk $name dibuat\n";
    }
}

$p2 = new ProductWithName("Laptop");

<?php 
include_once __DIR__."/Category.php";

class Product {
    private $name;
    private $type;
    private $category;
    private $price;
    private $amount;

    public function __construct(string $name, string $type, Category $category, int $price, int $amount ) {
        if ($name <= 15) {
            $this->name = $name;
        };
        $this->type = $type;
        $this->category = $category;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getAmount() {
        return $this->amount;
    }

}

$cibo = new Product("Cibo per cane", "Cibo", new Category("Cani", "🥗"), 10, 5);

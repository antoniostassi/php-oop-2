<?php 
include_once __DIR__."/Category.php";

class Product {
    private $name;
    private $type;
    private $category;
    private $price;
    private $amount;

    public function __construct(string $name, string $type, Category $category,  ) {
        $this->var = $var;
    }
}
<?php 
include_once __DIR__."/Category.php";
include_once __DIR__."/Cibo.php";
include_once __DIR__."/Cuccia.php";
include_once __DIR__."/Gioco.php";

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

$allProducts = [];
$allProducts[] = new Cibo("Crocchette di carne", "Cibo", new Category("Cane", "A"), 10, 2);
$allProducts[] = new Cibo("Crocchette di pesce", "Cibo", new Category("Gatto", "A"), 10, 2);
$allProducts[] = new Cuccia("Cuccia per cani", "Cuccia", new Category("Cane", "A"), 10, 2);
$allProducts[] = new Cuccia("Cuccia per gatti", "Cuccia", new Category("Gatto", "A"), 10, 2);
$allProducts[] = new Gioco("Boomerang", "Gioco", new Category("Cane", "A"), 10, 2);
$allProducts[] = new Gioco("Gomitolo di Lana", "Gioco", new Category("Gatto", "A"), 10, 2);

var_dump($allProducts);

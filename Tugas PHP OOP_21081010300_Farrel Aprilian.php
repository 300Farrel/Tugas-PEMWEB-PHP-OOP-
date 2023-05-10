<?php

class Product {
    public $name;
    public $price;
    public $discount;
    
    public function __construct($name, $price, $discount) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }
}

class CDMusic extends Product {
    public $artist;
    public $genre;
    
    public function __construct($name, $price, $discount, $artist, $genre) {
        parent::__construct($name, $price, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
        
        $this->price = $this->price + ($this->price * 0.1); // Increase price by 10%
        $this->discount = $this->discount + ($this->discount * 0.05); // Increase discount by 5%
    }
}

class CDRack extends Product {
    public $capacity;
    public $model;
    
    public function __construct($name, $price, $discount, $capacity, $model) {
        parent::__construct($name, $price, $discount);
        $this->capacity = $capacity;
        $this->model = $model;
        
        $this->price = $this->price + ($this->price * 0.15); // Increase price by 15%
    }
}

// Simulasi

$cdMusic = new CDMusic("Album A", 100000, 10, "Artist A", "Genre A");
echo "Nama CD Musik: " . $cdMusic->name . "<br>";
echo "Harga CD Musik: " . $cdMusic->price . "<br>";
echo "Diskon CD Musik: " . $cdMusic->discount . "<br><br>";

$cdRack = new CDRack("Rak CD A", 500000, 20, 100, "Model A");
echo "Nama CD Rack: " . $cdRack->name . "<br>";
echo "Harga CD Rack: " . $cdRack->price . "<br>";
echo "Diskon CD Rack: " . $cdRack->discount . "<br>";

?>
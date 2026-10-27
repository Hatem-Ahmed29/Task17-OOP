<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<?php

class Product
{
    public $name;
    public $price;
    public $brand;
    public $image;
    public $description;
    public $tax;

    public function getName()
    {
        return $this->name;
    }

    public function priceAfterDiscount($number)
    {
        return $this->price - ($this->price * $number / 100);
    }

    public function getFinalPrice()
    {
        $price = $this->priceAfterDiscount(20);
        return $price + ($price * $this->tax / 100);
    }
}    

//////////////////// OBJECT 1 ////////////////////////////////
$product1 = new Product();
$product1->name = "laptop";
$product1->price = 1000;
$product1->tax = 14;
$product1->brand = "Dell";
$product1->image = "images/laptop.jpg";
$product1->description = "Powerful laptop";

echo "The First product is : "."<br>";
echo '
<div class="container mt-5">
    <div class="card" style="width: 18rem;">

        <img src="' . $product1->image . '" class="card-img-top" alt="Laptop">

        <div class="card-body">
            <h5 class="card-title">' . $product1->getName() . '</h5>
            <p class="card-text">Brand: ' . $product1->brand . '</p>
            <p class="card-text">Description: ' . $product1->description . '</p>
            <p class="card-text">Price: ' . $product1->price . '</p>
            <p class="card-text">Price After Discount: ' . $product1->priceAfterDiscount(20) . '</p>
            <p class="card-text">Tax: ' . $product1->tax . '%</p>
            <p class="card-text">Final Price: ' . $product1->getFinalPrice() . '</p>
        </div>
    </div>
</div>
';
//echo "Product Name is : " . $product1->getName();
//echo "<br>";
//echo "Price After Discount is : " .  $product1->priceAfterDiscount(20);
//echo "<br>";
//echo "The Final Price is : " .  $product1->getFinalPrice();

//////////////////// OBJECT 2 ////////////////////////////////

$product2 = new product();
$product2->name = "phone";
$product2->price = 2000;
$product2->tax = 14;
$product2->brand = "iphone";
$product2->image = "images/phone.jpg";
$product2->description = "Powerful phone";

echo "<br>" . "The second product is : "."<br>";
echo '
<div class="container mt-5">
    <div class="card" style="width: 18rem;">

        <img src="' . $product2->image . '" class="card-img-top" alt="Phone">

        <div class="card-body">
            <h5 class="card-title">' . $product2->getName() . '</h5>
            <p class="card-text">Brand: ' . $product2->brand . '</p>
            <p class="card-text">Description: ' . $product2->description . '</p>
            <p class="card-text">Price: ' . $product2->price . '</p>
            <p class="card-text">Price After Discount: ' . $product2->priceAfterDiscount(20) . '</p>
            <p class="card-text">Tax: ' . $product2->tax . '%</p>
            <p class="card-text">Final Price: ' . $product2->getFinalPrice() . '</p>
        </div>
    </div>
</div>
';
//echo "Product Name is : " . $product2->getName();
//echo "<br>";
//echo "Price After Discount is : " .  $product2->priceAfterDiscount(20);
//echo "<br>";
//echo "The Final Price is : " .  $product2->getFinalPrice();



//////////////////// OBJECT 3 ////////////////////////////////

$product3 = new product();
$product3->name = "car";
$product3->price = 5000;
$product3->tax = 14;
$product3->brand = "lamborghini";
$product3->image = "images/car.jpg";
$product3->description = "Powerful lamborghini";

echo "<br>" . "The Third product is : "."<br>";
echo '
<div class="container mt-5">
    <div class="card" style="width: 18rem;">

        <img src="' . $product3->image . '" class="card-img-top" alt="Car">

        <div class="card-body">
            <h5 class="card-title">' . $product3->getName() . '</h5>
            <p class="card-text">Brand: ' . $product3->brand . '</p>
            <p class="card-text">Description: ' . $product3->description . '</p>
            <p class="card-text">Price: ' . $product3->price . '</p>
            <p class="card-text">Price After Discount: ' . $product3->priceAfterDiscount(20) . '</p>
            <p class="card-text">Tax: ' . $product3->tax . '%</p>
            <p class="card-text">Final Price: ' . $product3->getFinalPrice() . '</p>
        </div>
    </div>
</div>
';
//echo "Product Name is : " . $product3->getName();
//echo "<br>";
//echo "Price After Discount is : " .  $product3->priceAfterDiscount(20);
//echo "<br>";
//echo "The Final Price is : " .  $product3->getFinalPrice();

?>
</body>
</html>
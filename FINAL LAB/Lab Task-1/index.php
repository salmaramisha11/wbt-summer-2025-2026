<?php
$studentName = "Ummay Salma";
$studentID = "23-54504-3";
$choice = 2;     
$quantity = 5;

switch ($choice) {
    case 1:
        $food = "Burger";
        $price = 5;
        break;

    case 2:
        $food = "Pizza";
        $price = 8;
        break;

    case 3:
        $food = "Sandwich";
        $price = 4;
        break;

    case 4:
        $food = "Coffee";
        $price = 3;
        break;

    default:
        $food = "Invalid";
        $price = 0;
}

$total = $price * $quantity;

if ($total >= 30) {
    $discountPercent = 20;
} elseif ($total >= 20) {
    $discountPercent = 10;
} else {
    $discountPercent = 0;
}

$discountAmount = ($total * $discountPercent)/100;
$finalBill = $total - $discountAmount;

echo "================================<br>";
echo "UNIVERSITY CAFETERIA<br>";
echo "================================<br>";

echo "Student Name : " .$studentName. "<br>";
echo "Student ID : " .$studentID. "<br>";

echo "<br>Food Item : " .$food. "<br>";
echo "Price : $" .$price. "<br>";
echo "Quantity : " .$quantity. "<br>";

echo "<br>Ordered Items:<br>";
for ($i = 1; $i <= $quantity; $i++) {
    echo "Item $i : $food<br>";
}

echo "<br>Subtotal : $" .$total. "<br>";
echo "Discount : " .$discountPercent. "%<br>";
echo "Discount Amount : $" .$discountAmount. "<br>";
echo "Final Bill : $" .$finalBill. "<br>";
echo "<br>Thank you for visiting!";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $desciption = $_POST["desciption"];
    $price = $_POST["price"];
    $percent = $_POST["percent"];
}
    $DiscountAmount = $price * $percent * 0.01 * 0.1;
    $DiscountPrice = $price - $DiscountAmount;
    echo "Số tiền chiết khấu là: ". $DiscountAmount . "<br>";
    echo "Số tiền sau khi chiết khấu là : " . $DiscountPrice;
?>
<?php

include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$quantity = $_POST['quantity'];
$order = $_POST['order'];
$address = $_POST['address'];


$sql = "INSERT INTO `order_tbl` (`name`, `email`, `number`, `quantity`, `orders`, `address`) VALUES ('$name', '$email', '$number', '$quantity', '$order', '$address')";

$result = mysqli_query($con, $sql);

if ($result) {
    $message = "Order Added Successfully";
    echo "<script type='text/javascript'>alert('$message'); 
        window.location.href = 'index.html';</script>";
    exit();
} else {
    echo mysqli_error($con);
}

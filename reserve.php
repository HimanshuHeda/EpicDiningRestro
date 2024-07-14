<?php

include "config.php";

$days = $_POST['days'];
$time = $_POST['time'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$members = $_POST['members'];


$sql = "INSERT INTO `reserve_tbl` (`day`, `time`, `name`, `contact`, `members`) VALUES ('$days', '$time', '$name', '$contact', '$members')";

$result = mysqli_query($con, $sql);

if ($result) {
    $message = "Table has been Booked";
    echo "<script type='text/javascript'>alert('$message'); 
        window.location.href = 'index.html';</script>";
    exit();
} else {
    echo mysqli_error($con);
}

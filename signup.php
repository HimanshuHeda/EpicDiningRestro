<?php

include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO `signup_tbl` (`name`, `email`, `pwd`) VALUES ('$name', '$email', '$pwd')";

$chk_mail = $con->query("select * from signup_tbl where email = '$email' ");

if ($chk_mail->num_rows > 0) {
    echo "Email is already exists please try with another email";
} else {
    $result = mysqli_query($con, $sql);
    if ($result) {
        $message = "SignUp Successfully Login for Continue!";
        echo "<script type='text/javascript'>alert('$message'); 
        window.location.href = 'login.html';</script>";
        exit();
    } else {
        echo mysqli_error($con);
    }
}

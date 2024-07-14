<?php
session_start();
include "config.php";

if (isset($_POST['loginBtn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['pwd']);
    if ($email != "" && $password != "") {
        $sql_query = "select count(*) as cntUser from signup_tbl where email='" . $email . "' and pwd='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
    }
}

if ($count > 0) {
    $_SESSION['email'] = $email;
    $message = "Login Successfully.";
    echo "<script type='text/javascript'>alert('$message'); 
    window.location.href = 'index.html';</script>";
    exit();
} else {
    $message = "Email or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message'); 
    window.location.href = 'login.html';</script>";
}

<?php
include "config.php";

$feedback = $_POST['feedback'];

$sql = "INSERT INTO `feedback_tbl` (`feedback`) VALUES ('$feedback')";

$rs = mysqli_query($con, $sql);
if ($rs) {
    $message = "Feedback given Successfully";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href = 'index.html';</script>";
    exit();
} else
    echo mysqli_error($con);

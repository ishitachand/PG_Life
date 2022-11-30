<?php
session_start();
require("../includes/database_connect.php");

$name=$_POST['name']
$email = $_POST['email'];
$phone=$_POST['phone'];
$check_in=$_POST['check_in'];
$check_out=$_POST['check_out'];
$room=$_POST['room'];

$sql = "SELECT * FROM users WHERE email='$email' ";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success" => false, "message" => "This email id is already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO checked (name,email,contact_no, date_in, date_out,status) VALUES ('$name','$email', '$phone', '$check_in', '$chek_out','$room)";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
mysqli_close($conn);

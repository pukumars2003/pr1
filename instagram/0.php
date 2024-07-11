

<?php

session_start();

include_once("../admin/class/adminback.php");
include 'ip.php';
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}

// Check if the user is already logged in
if(isset($_SESSION['user_id'])) {
    // If the user is already logged in, redirect them to another page
    // You might need to change this redirect location according to your logic
    header('Location: user_login.php');
    exit; // Ensure that no further code is executed after the redirection
}

// If the user is not logged in, redirect them to the login page
header('Location: user_login.php');
exit; // Ensure that no further code is executed after the redirection


$userid = $_SESSION['user_id'];
$username = $_SESSION['username'];

if (isset($_GET['logout'])) {
    if ($_GET['logout'] == "logout") {
        $obj->user_logout();
    }
}

if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    // $order_query =  $obj->order_details_by_id($id);
} else {
    header("location:login.html");
}


?>



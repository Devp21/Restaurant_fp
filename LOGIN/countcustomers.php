// connect to the database
<!DOCTYPE html>
<html>
 <link rel = "stylesheet" type = "text/css" href = "style2.css"> 

<body>

<style>



body {
  background-image: url('https://st2.depositphotos.com/4135663/10198/i/450/depositphotos_101982634-stock-photo-restaurant-blurred-background.jpg');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover
}
</style>
<div id = "frm">  


<h1>number of customers</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "achija";


$conn = mysqli_connect("localhost", "root", "", "achija");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// specify date range
$start_date = '2023-04-21';
$end_date = '2023-04-27';

// query the database
$sql = "SELECT COUNT(*) as count FROM customer WHERE registration_date BETWEEN '$start_date' AND '$end_date'";
$result = mysqli_query($conn, $sql);

// display result
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo " Number of orders between $start_date and $end_date =    " . $row["count"];
} else {
    echo "No results found.";
}

// close the database connection
mysqli_close($conn);



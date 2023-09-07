<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "achija";

$conn = mysqli_connect("localhost", "root", "", "achija");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get the current date
$current_date = date('Y-m-d');

// query the database
$sql = "SELECT COUNT(*) as count FROM customer WHERE registration_date = '$current_date'";
$result = mysqli_query($conn, $sql);

// display result
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Number of orders for $current_date: " . $row["count"];
    $count = $row["count"]; 
    $query = "INSERT INTO customer_count (date,count) VALUES ('$current_date',$count) 
          ON DUPLICATE KEY UPDATE count =$count";
    $res = mysqli_query($conn, $query);

} else {
    echo "No results found.";
}



// close the database connection
mysqli_close($conn);
?>
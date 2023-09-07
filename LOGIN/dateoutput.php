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


<h1>customers registration data</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "achija";


// Create connection
$conn = mysqli_connect("localhost", "root", "", "achija");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// specify date range
$start_date = '2023-04-21';
$end_date = '2023-04-24';

// query the database
$sql = "SELECT * FROM customer WHERE registration_date BETWEEN '$start_date' AND '$end_date'";
$result = mysqli_query($conn, $sql);

// display results
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "name : " . $row["name"]. " - table number     :    " . $row["table_no"]. " phone number---- " . $row["phone_no"].     "<br>";
        
    }
} else {
    echo "No results found.";
}

mysqli_close($conn);
?>

</div>
</body>

</html>




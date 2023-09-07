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

$sql = "SELECT name, table_no, phone_no FROM customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "name : " . $row["name"]. " - table number     :    " . $row["table_no"]. " phone number---- " . $row["phone_no"].     "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</div>
</body>

</html>
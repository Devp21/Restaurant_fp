<?php
session_start();
$conn = mysqli_connect("localhost","root", '',"achija");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>
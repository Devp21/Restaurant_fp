<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => achija
		$conn = mysqli_connect("localhost", "root", "", "achija");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$table_no = $_REQUEST['table_no'];
		$phone_no = $_REQUEST['phone_no'];
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO customer (name,table_no,phone_no,registration_date) VALUES ('$name',
			'$table_no','$phone_no',NOW())";
		
		if(mysqli_query($conn, $sql)){
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['table_no'] = $_POST['table_no'];
			$_SESSION['phone_no'] = $_POST['phone_no'];
			header("Location: ../index.html");
			exit();
			// echo "<h3>Data stored in a database successfully."
			// 	. " Please browse your localhost php my admin"
			// 	. " to view the updated data</h3>";

			// echo nl2br("\n$name\n $table_no\n "
			// 	. "$phone_no\n ");

			// readfile("http://localhost:8080/Achija_dev/index.html");
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>

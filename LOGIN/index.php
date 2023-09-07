<!-- <?php
// Start the session
session_start();
if(isset($_POST['save'])){
//store the session data
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['table_no'] = $_POST['table_no'];
	$_SESSION['phone_no'] = $_POST['phone_no'];
    //print_r($_SESSION);
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>customer registration</title>
</head>
<body>
<img src="image/3.jpg" width="100%" height="100%" style="position:relative;">

	<div class="cr">
		<form action="insert.php"  method="post">
			
<p>
			<input type="text" name="name" id="name" placeholder="Name">
			</p>
						
<p>
			<input type="text" name="table_no" id="table_no" placeholder="Table Number">
			</p>

			
<p>
			<input type="text" name="phone_no" id="phone_no" placeholder="Phone Number">
			</p>

			<div style="text-align:center;"><input type="submit" value="Submit" style="font-weight:bold;width:100px;"></div>

		</form>
<!-- <?php
echo 'name='.$_SESSION['name'];
?>		 -->
</div>
<style>
.cr{
	position: absolute;
	right:10%;
	bottom:0%;
}
.cr input{
	background-color:#edb869;
	border:none;
	padding:20px;
	width:500px;
	font-size:20px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: black;
        opacity: 1; /* Firefox */
        text-align:center;
		font-weight:bold;
        }
</style>
</body>
</html>

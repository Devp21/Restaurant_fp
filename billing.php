<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "achija");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

if(isset($_POST['save'])){
    //store the session data
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['table_no'] = $_POST['table_no'];
	$_SESSION['phone_no'] = $_POST['phone_no'];
    //print_r($_SESSION);
}

// check if payment button is clicked
if(isset($_POST['payment'])){

    // get user details from session
    $name = $_SESSION['name'];
    $table_no = $_SESSION['table_no'];
    $phone_no = $_SESSION['phone_no'];
    // insert user details into database
    // mysqli_query($conn, "INSERT INTO users (name, table_no, phone_no) VALUES ('$_SESSION['name']', '$table_no', '$phone_no')");
    // get the last inserted user ID
    $user_id = mysqli_insert_id($conn);
    // insert ordered items into database
    foreach ($_SESSION ["shopping_cart"] as $keys => $values) {
        $item_id = $values['item_id'];
        $item_name = $values['item_name'];
        $item_price = $values['item_price'];
        $item_quantity = $values['item_quantity'];
        $sql = "INSERT INTO orders (name, table_no, item_id, item_name, item_quantity, orderdatetime) VALUES ('$name','$table_no', '$item_id', '$item_name','$item_quantity',CURRENT_TIMESTAMP)";
        if(mysqli_query($conn, $sql)) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    // clear the shopping cart and session data
    unset($_SESSION["shopping_cart"]);
    unset($_SESSION["name"]);
    unset($_SESSION["table_no"]);
    unset($_SESSION["phone_no"]);
    // redirect to thank you page
    header("Location: RazorPay-PHP-Integration-with-DB-main\payment-form.php");
    exit();
}

// if(isset($_POST["add_to_cart"]))
// {
//     if(isset(($_SESSION["shopping_cart"])))
//     {
//         $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
//         if (!in_array($_GET["id"], $item_array_id))
//         {
//             $count = count ($_SESSION ["shopping_cart"]);
//             $item_array = array(
//                 'item_id' => $_GET["id"],
//                 'item_name' => $_POST["hidden_name"],
//                 'item_price' => $_POST["hidden_price"],
//                 'item_quantity' => $_POST["quantity"]
//             );    
//             $_SESSION ["shopping_cart"] [$count] = $item_array;
//         }
//         else
//         {
//             echo '<script>alert ("Item Already Added") </script>';
//             echo '<script>window.location="starter.php"</script>';
//         }
//     }
//     else
//     {
//         $item_array = array(
//             'item_id' => $_GET["id"],
//             'item_name' => $_POST["hidden_name"],
//             'item_price' => $_POST["hidden_price"],
//             'item_quantity' => $_POST["quantity"]
//         );    
//         $_SESSION["shopping_cart"][0] = $item_array;
//     }
// }

// if(isset($_GET["action"]))
// {
//     if($_GET["action"] == "delete")
//     {
//         foreach($_SESSION["shopping_cart"] as $keys => $values)
//         {
//             if($values["item_id"] == $_GET["id"])
//             {
//                 unset($_SESSION["shopping_cart"][$keys]);
//                 echo '<script>window.location="starter.php"</script>';
//             }
//         }
//     }
// }
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="respoonsive.css">

    <title>Achija</title>
  </head>
  <body>
    <marquee class="py-3 font-weight-bold" style="background-color: orange;font-size: 24px;" scrollamount="10">WELCOME TO ACHIJA</marquee>
    <section class="container-fluid menu ">
        <div class="row" style="padding:10px">
            <p><h3>Order Details </h3></p>
            <h3>
            <?php
            if(isset($_SESSION['name'])){
            echo '<br>Name='.$_SESSION['name'];

            if(isset($_SESSION['table_no']))
                echo '<br>Table no='.$_SESSION['table_no'];

            if(isset($_SESSION['phone_no']))
                echo '<br>phone no='.$_SESSION['phone_no'];    
            }
            ?>
            </h3>

            <div class="table-responsive">
                <table class ="table table-bordered">
                    <tr>
                        <th width="40%">Item Name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                    </tr>
                    <?php
                    if (!empty($_SESSION ["shopping_cart"]))
                    {
                        $total = 0;
                        foreach ($_SESSION ["shopping_cart"] as $keys => $values)
                        {
                    ?>
                    <tr>
                        <td><?php echo $values ["item_name"]; ?></td>
                        <td><?php echo $values ["item_quantity"]; ?></td>
                        <td>Rs <?php echo $values ["item_price"]; ?></td>
                        <td><?php echo number_format ($values ["item_quantity"]* $values ["item_price"], 2) ; ?></td>


                    </tr>
                    <?php
                            $total = $total + ($values ["item_quantity"]* $values ["item_price"]);
                            $_SESSION['total']=$total; // Store $total in session var 'total'
                    
                        }
                    ?>
                    
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">Rs <?php echo number_format($total, 2); ?></td>
                        
                    </tr> 
                    <?php   
                    }
                    ?>    
                </table>
            <form method="post" action="">
            </div>
            
            <button type="submit" name="payment" id ="payment"style="margin:auto;background-color:orange;padding:15px;font-weight:bold;border-radius:20px;color:black;text-decoration:none;">payment</button>
            
            </div> 
            </form>
                         

    </section>
  </body>
</html>
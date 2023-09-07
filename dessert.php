<?php
session_start();

$conn = mysqli_connect("localhost","root", '',"achija");
if(isset($_POST["add_to_cart"]))
{
    if(isset(($_SESSION["shopping_cart"])))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
        if (!in_array($_GET["id"], $item_array_id))
        {
            $count = count ($_SESSION ["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );    
            $_SESSION ["shopping_cart"] [$count] = $item_array;
        }
        else
        {
            echo '<script>alert ("Item Already Added") </script>';
            echo '<script>window.location="starter.php"</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );    
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>window.location="starter.php"</script>';
            }
        }
    }
}
  
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
        <div class="row">
            <div class="col-12 col-lg-2 text-center leftmenu pt-3 pt-lg-5">
                <a href="index.html" style="color:black;">Back to Home</a>
                <p class="font-weight-bold py-2 my-3 pmenu">Menu</p>
                <nav>
                    <div class="nav flex-row flex-wrap flex-lg-column nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <div class="sidebar">
                            <a class ="nav-item nav-link" href="starter.php">Starter</a>
                            <a class ="nav-item nav-link" href="pavbhaji.php">Pav Bhaji</a>
                            <a class ="nav-item nav-link" href="southindian.php">South Indian</a>
                            <a class ="nav-item nav-link" href="indianbreads.php">Indian Breads</a>
                            <a class ="nav-item nav-link" href="maincourse.php">Main Course</a>
                            <a class ="nav-item nav-link" href="rice.php">Rice</a>
                            <a class ="nav-item nav-link" href="chinese.php">Chinese</a>
                            <a class ="nav-item nav-link active" href="dessert.php">Desserts</a>
                          </div>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-lg-10 py-3 py-lg-5">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                        <div class="">
                        <h3>Order Details</h3>
                                <div class="table-responsive">
                                    <table class ="table table-bordered">
                                        <tr>
                                            <th width="40%">Item Name</th>
                                            <th width="10%">Quantity</th>
                                            <th width="20%">Price</th>
                                            <th width="15%">Total</th>
                                            <th width="58">Action</th>
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
                                            <td><a href="starter.php?action=delete&id= <?php echo $values ["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>

                                        </tr>
                                        <?php
                                                $total = $total + ($values ["item_quantity"]* $values ["item_price"]);

                                            }
                                        ?>
                                        
                                        <tr>
                                            <td colspan="3" align="right">Total</td>
                                            <td align="right">Rs <?php echo number_format($total, 2); ?></td>
                                            <td style="background-color:orange;text-align:center;"><a style="color:black;text-decoration:none" href="billing.php">Checkout</a></td>
                                        </tr> 
                                        <?php   
                                        }
                                        ?>    
                                    </table>
                                </div>
                            <div class = "d-flex flex-wrap justify-content-around align-items-center">
                                <?php
                                $query = "SELECT * FROM fooditems WHERE id LIMIT 70,10";
                                $result = mysqli_query($conn,$query);
                                if (mysqli_num_rows ($result) > 0)
                                {
                                while ($row = mysqli_fetch_array($result))
                                    {
                                ?>
                                <div class = "product">
                                    <form method="post" action="starter.php?action=add&id=<?php echo $row ["id"]; ?>">
                                        <div style="border:1px solid #333; background-color: #f1f1f1; border-radius: 5px;">
                                            <img src=<?php echo "/Achija_dev/dessertimg/". $row ["image_url"]; ?> ><br />
                                            <h4 class="text-info"><?php echo $row ["name"]; ?></h4>
                                            <h4 class="text-danger">Rs <?php echo $row ["price"]; ?></h4>
                                            <input type="text" name="quantity" class="form-control" value="1" />
                                            <input type="hidden" name="hidden_name" value="<?php echo $row ["name"]; ?>" />
                                            <input type="hidden" name="hidden_price" value="<?php echo $row ["price"]; ?>" />
                                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                        </div>    
                                    </form>
                                </div>
                                <?php         
                                    }
                                }       
                                ?>
                                <div style="clear:both"></div>
                                <br/>
                                <!-- <h3>Order Details</h3>
                                <div class="table-responsive">
                                    <table class ="table table-bordered">
                                        <tr>
                                            <th width="40%">Item Name</th>
                                            <th width="10%">Quantity</th>
                                            <th width="20%">Price</th>
                                            <th width="15%">Total</th>
                                            <th width="58">Action</th>
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
                                            <td>$ <?php echo $values ["item_price"]; ?></td>
                                            <td><?php echo number_format ($values ["item_quantity"]* $values ["item_price"], 2) ; ?></td>
                                            <td><a href="starter.php?action=delete&id= <?php echo $values ["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>

                                        </tr>
                                        <?php
                                                $total = $total + ($values ["item_quantity"]* $values ["item_price"]);

                                            }
                                        ?>
                                        
                                        <tr>
                                            <td colspan="3" align="right">Total</td>
                                            <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                            <td></td>
                                        </tr> 
                                        <?php   
                                        }
                                        ?>    
                                    </table>
                                </div> -->
                                </div>
                                
                            </div>  
                        </div>
                    </div>
                </div>
            </div>              

    </section>
  </body>
</html>
<?php
require("includes/connections.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
  
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="css/reset.css" /> 
    <link rel="stylesheet" href="css/style.css" /> 
      
    <title>Shopping cart</title> 
  
</head> 
  
<body> 
      
    <div id="container"> 
  
        <div id="main"> 
              <h1>Product List</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT name, description, price FROM products ORDER BY id";
                $query = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($query)) {;
                ?>
                <tr>
                    <td><?=$row["name"]?></td>
                    <td><?=$row["description"]?></td>
                    <td>$<?=$row["price"]?></td>
                    <td><a href="#">Buy</a></td>
                </tr>
                <?php } ?>
            </table>
        </div><!--end main-->
          
        <div id="sidebar"> 
              <h1>Your cart</h1>
        </div><!--end sidebar-->
  
    </div><!--end container-->
  
</body> 
</html>

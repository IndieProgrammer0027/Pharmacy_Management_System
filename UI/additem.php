<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>page12</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="assets/css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
</head>
<body style="background-image: url('3.jpg'); background-repeat: no-repeat; background-attachment: fixed;  
  background-size: cover;">

 <!--<div class="container">

  <div><a href="Billing.php"><h1 style="text-decoration:none; font-weight:100px;">Billing</h1></a></div>
  <div><a href="Purchase.php"><h1 style="text-decoration:none; font-weight:100px;">Purchase</h1></a></div>
  <div><a href="Summary.php"><h1 style="text-decoration:none; font-weight:100px;">Summary</h1></a></div>
  <div><a href="Inventory.php"><h1 style="text-decoration:none; font-weight:100px;">Inventory</h1></a></div>
  <div><a href="Accounts.php"><h1 style="text-decoration:none; font-weight:100px;">Accounts</h1></a></div>
  <div><a href="Products.php"><h1 style="text-decoration:none; font-weight:100px;">Products</h1></a></div>
 </div>-->
 
  <div class="group">
    <form action="/Purchase.php" method="">
      <h1>List of Items</h1>
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      </br><input type="checkbox" name="item" class="control" placeholder="" value="" colspan="2">
      Augmenton
            </br><input type="checkbox" name="item" class="control" placeholder="" value="">
      Rigix
      <div class="error">
        
      </div>
     </div>
 <!--&rarr-->
     <div class="group m20">
      <a href="#"><input type="button" name="btn" value="Add to cart" onclick="myFunction()"></a>
      <!-- <button class="GFG" 
        onclick="window.location.href = '';"> 
        Click Here 
    </button> -->
     <p id="demo"></p>
     
     </div>

  <!--<img src="pils.jpg" alt="pilsImage">-->

 
</form>
<!-- <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "purchase.php";
}
</script> -->
<script>
function myFunction() {
  location.replace("Purchase.php")
}
</script>
<?php

?>
</body>
</html>
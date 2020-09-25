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
<body style="background-image: url('6.jpg'); background-repeat: no-repeat; background-attachment: fixed;  
  background-size: cover;">
  <style>
  	#a{
  		text-decoration: none;
  		margin-top: 15px;
  		color: black;
  	}
  	
  </style>

 <!--<div class="container">

  <div><a href="Billing.php"><h1 style="text-decoration:none; font-weight:100px;">Billing</h1></a></div>
  <div><a href="Purchase.php"><h1 style="text-decoration:none; font-weight:100px;">Purchase</h1></a></div>
  <div><a href="Summary.php"><h1 style="text-decoration:none; font-weight:100px;">Summary</h1></a></div>
  <div><a href="Inventory.php"><h1 style="text-decoration:none; font-weight:100px;">Inventory</h1></a></div>
  <div><a href="Accounts.php"><h1 style="text-decoration:none; font-weight:100px;">Accounts</h1></a></div>
  <div><a href="Products.php"><h1 style="text-decoration:none; font-weight:100px;">Products</h1></a></div>
 </div>-->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"href="#">PMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="login.php">Home</a></li>
      <li id="a"><div class="dropdown">
    	<a href="additem.php" data-toggle="dropdown">
      		Billing
    	</a>
    		<div class="dropdown-menu">
      			<a class="dropdown-item" href="additem.php">Add Items</a>
   			</div>
		 </div>
	  </li>
      <li><a href="Purchase.php">Purchase</a></li>
      <li><a href="Summary.php">Summary</a></li>
      <li><a href="Inventory.php">Inventory</a></li>
      <li><a href="Accounts.php">Accounts</a></li>
      <li><a href="Products.php">Products</a></li>
      
    </ul>
  </div>
</nav>
<a href="login.php"><input type="button" value="Logout"></a>
  <!--<img src="pils.jpg" alt="pilsImage">-->

 


</body>
</html>
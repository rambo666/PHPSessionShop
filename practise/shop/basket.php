<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Basket</title>
<meta name="keywords" content="KEYWORDS" />
<meta name="description" content="DESCRIPTION" />
<meta name="copyright" content="Tiram &copy; 2005" />
<link rel="stylesheet" href="default.css" type="text/css" media="all" title="Default styles" />

</head>
<body>
<h1>Your basket</h1>

<p>
<a href="displayFruit.php">Continue Shopping</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="checkout.php">Checkout</a>
</p>

<h2>Your basket contains...</h2>

<?php
  $id = $_REQUEST["hidId"];
  $name = $_REQUEST["hidName"];
  $price = $_REQUEST["hidPrice"];
  $qty = $_REQUEST["txtQty"];
  
  echo "id=$id name=$name price=$price qty=$qty";
?>

</body>
</html>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["action"])) {
switch($_POST["action"]) {

	case "add":
		if(!empty($_POST["quantity"])) {
			$productByID = $db_handle->runQuery("SELECT * FROM ShoesTable WHERE id='" . $_POST["hidId"] . "'");
			$itemArray = array($productByID[0]["id"]=>array('name'=>$productByID[0]["name"], 'id'=>$productByID[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByID[0]["price"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByID[0]["id"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByID[0]["id"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_POST["id"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "Clear Cart":
		unset($_SESSION["cart_item"]);
		$test = 0;
	break;
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css"  />
<link rel="stylesheet" type="text/css" href="style.css"  />
<style type="text/css">
p
	{
	 text-align:center;
	 font-style:bold;
	}
table, th, td
	{
	border:1px solid green;
	}
th
	{
	background-color:#D1FFD1;
	}
#btnTable
	{
	margin:auto;
	}
#mainTable
	{
	margin:auto;
	}

</style>


<!-- Page title-->
<title>Woodland Shoes</title>

</head>


<body>

<!-- Top banner -->

<div id="top">

	<div id="top_mainlogo">
	<div id="log"><!--top left-->


	</div>
		<img src="logo.gif" alt="Logo"/>

				<!--Navigator link -->

				<div id="top_nav">
				<img src="navbackground.gif" alt="Navigator background" height="38px" width="650px"/>
				</div>

					<div id="navigator">
							<ul class="nav_hover">
							<li><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="men.php">Mens</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="women.php">Womens</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="new.php">New</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="contactus.php">Contact Us</a></li>
							</ul>
					</div>

</div>
	</div>




<!-- Body Image slider and side logo-->

<div id="main">








<p class="about_us">Your Basket</p>
<hr width="860px"/>

<div class="main_background">


<div class="content">

<!-- change from here for other pages-->

<table border="1" cellspacing="0" width="800px" id="mainTable">
<tr><th><p>Ref No.</p></th><th><p>Name</p></th><th><p>Price</p></th><th><p>Qty</p></th><th><p>Cost</p></th><th>Action</th></tr>

<?php


//  initialise the total to zero
  $item_total = 0;
  $error="&nbsp;";

  if(!empty($_SESSION["cart_item"]))

  {

	foreach ($_SESSION["cart_item"] as $item)
	    {

				echo"
					<tr><td>$item[id]</td>
					<td><strong>$item[name]</strong></td>
					<td>$.$item[price]</td>
					<td>$item[quantity]</td>
					<td>" . ($item["price"]*$item["quantity"]) . "</td>
					<td><a href='basket.php?action=remove&hidId=$item[id]' class='btnRemoveAction'>Remove Item</a></td>
					</tr>";

	        		 $item_total += ($item["price"]*$item["quantity"]);

			}


			    //finally display the total
	  			echo"<tr><td colspan='3'></td><td><b>TOTAL</b></td><td><b>$item_total</b></td></tr></table>";

}

else
{
$error="No Item in the basket"; echo"$error";echo "$item_total";
}

?>




<table id="btnTable">
<tr><td>    <form action="index.php" method="post">
				<input type="submit" name="btnSubmit" value="Continue shopping"/>

			</form>
	</td>
	<td>	<form action="checkout.php">
				<input type="submit" name="btnSubmit2" value="Check Out"/>
				 <input type="hidden" name="hidTotal" value="<?php echo $item_total; ?>" />
			</form>
	</td>
	<td>
			<form action="basket.php" method="post">
				<input type="hidden" name="action" value="Clear Cart" />
				<input type="submit" name="btnReset" value="Reset Cart"/>
			</form></td>
</tr>

</table>

</div><!-- closing of class aboutus_main-->
</div><!-- closing of class aboutus_background-->

<br/><br/>
</div><!-- id=main div close-->

<!--Footer-->
<div id="bottom">

	<hr/>

	<p class="copyright">Copyright &#169;  2016.  All Right Reserved</p>
	<p class="powered">Powered and Designed by <em>Deepesh Thapa</em></p>

</div><!-- [end of the page]-->
</body>
</html>

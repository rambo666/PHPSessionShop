<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css"  />
<script language="javascript" type="text/javascript">

function checkForm()
{

if (myForm.txtQty.value == 0)

{

alert ("Please enter Quantity");
return false;
}
</script>
<!-- Page title-->
<title>Woodland Shoes</title>

</head>


<body>

<!-- Top banner -->

<div id="top">

	<div id="top_mainlogo">
	<div id="log"><!--top left-->
				<a href="basket.php">My Basket</a>

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








<p class="about_us">You Selected</p>
<hr width="860px"/>

<div class="main_background">


<div class="content">

<!-- change from here for other pages-->

<table border="0">

<?php

  // fetch the txtId parameter that was passed to this page
  $txtId=$_REQUEST["hidId"];
 //  establish a connection to the server
  $connection = mysql_connect("139.59.165.74", "1142374_b382", "watchtower007");


  //  select the database
  $database = mysql_select_db("1142374_b382");
  if ( ! $database ) die(" Cannot connect to database");



  // Set up and execute the query
  $query = "SELECT * FROM ShoesTable WHERE id=\"$txtId\" ";
  $resultSet = mysql_query($query);
  if ( ! $resultSet ) die("Cannot execute query");


  // Fetch the selected row from the result set
  $row = mysql_fetch_row($resultSet);

  // get each element from the row
  $id = $row[0];
  $name = $row[1];
  $price = $row[2];
  $description = $row[3];
  $image = $row[4];

  //  display detail
  echo"<tr><td rowspan=15><img src=\"shoesimage/$image\"/></td><tr><td></td> </tr><tr><td></td> </tr>
  		<tr><td><b>Ref no:</b></td><td>$id</td></tr>
  		<tr><td><b>Name</b></td><td>$name</td>
  		<tr><td><b>Price</b></td><td>&#163; $price</td>

  		\n";

?>

<tr><td>
<form action="basket.php" name="myForm" onSubmit="return checkForm()" method="post">
  <tr><td><label>Quantity</label></td>
  <td><input type="text" name="quantity" value="1" /></td>
  <td><input type="hidden" name="hidId" value="<?php echo $id; ?>" />
      <input type="hidden" name="hidName" value="<?php echo $name; ?>" />
      <input type="hidden" name="hidPrice" value="<?php echo $price; ?>" />
      <input type="hidden" name="action" value="add" />
      <input type="submit" name="btnSubmit" value="Add to cart" />

</form>
</td><td>
</td></tr>
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

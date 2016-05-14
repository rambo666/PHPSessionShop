
<?php
  session_start();

  //
  if (isset ($_REQUEST["btnReset"]))
  	session_destroy();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css"  />
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
<tr><th><p>Ref No.</p></th><th><p>Name</p></th><th><p>Price</p></th><th><p>Qty</p></th><th><p>Cost</p></th><th>Action</th>

<?php


  	$error="No Item in the basket";


	echo"$error\n";
    //  display the data on the web page


?>




</table>
<table id="btnTable">
<tr><td>    <form action="index.php" method="post">
				<input type="submit" name="btnSubmit" value="Continue shopping"/>
			</form>
	</td>

</tr>

</table>

</div><!-- closing of class aboutus_main-->
</div><!-- closing of class aboutus_background-->

<br/><br/>
</div><!-- id=main div close-->

<!--Footer-->
<div id="bottom">

	<hr/>

	<p class="copyright">Copyright &#169;  2011.  All Right Reserved</p>
	<p class="powered">Powered and Designed by <em>Deepesh Thapa(21110575)</em></p>

</div><!-- [end of the page]-->
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css"  />

<!--Validation, If no radio button selected-->
<script type="text/javascript">

<!--declare a variable-->
var radBtnSelected = false;

<!-- method while radio button is clicked returns true-->
function radBtnClick(radio)
{

  radBtnSelected = true;
}

<!-- method to show error if radio button not clicked-->
function btnSubmitClick()
{
if ( ! radBtnSelected )
    alert("Please select a shoes from above list");
 else
 myForm.submit();
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








<p class="about_us">Kids Collection</p>
<hr width="860px"/>

<div class="main_background">


<div class="content">

<!-- change from here for other pages-->
<?php

//  establish a connection to the server
  $connection = mysql_connect("fdb3.awardspace.com", "1142374_b382", "watchtower007");


  //  select the database
  $database = mysql_select_db("1142374_b382");


  //  set up an SQL query to display all the data
  $query = "SELECT * FROM ShoesTable WHERE type=\"kids\" ";

  //  execute the query, save results in the resultSet
  $resultSet = mysql_query($query);
  if ( ! $resultSet ) die(" Cannot execute query");


?>

<form action="showItem.php" name="myForm" onsubmit="return checkForm()">

  <table border="0" width="auto" align="center">


  <?php

    // fetch the first row
    $row = mysql_fetch_row($resultSet);

    //  all the while we have a row...
    while ( $row != null )
    {
      // get each element of the row
      $id = $row[0];
      $name = $row[1];
      $price = $row[2];
      $discription = $row[3];
      $image = $row[4];

      //  display another table row on the web page

      echo "<tr> <td colspan='3'><b>Ref No.</b> $id</td></tr>
      		<tr> <td colspan='3'><p style='font-size:1.5em'> <b>$name</b></p></td></tr>
      		<tr><td width='5%'><input type=\"radio\" name=\"radId\" value=\"$id\" onclick=\"radBtnClick(this);\" /></td><td> <img src=\"shoesimage/$image\" width='160px' height='160px' alt='Mens shoes'/></td><td class='aDiscription'> $discription</td></tr>
      		<tr><td> <p style='color:#B80000'><b>Price:</b>&#163;$price</p></td><td colspan='2'><input type='button' name='btnSubmit' value='Select' onclick='btnSubmitClick();'/></td></tr>
      		<tr><td colspan='3'><hr/><br/></td></tr>\n";


      //  fetch another row
      $row = mysql_fetch_row($resultSet);
    }

  ?>

   </table>


</form><!-- End of form-->


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

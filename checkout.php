<?php
if ( isset($_REQUEST["btnSubmit2"]) )
  {
	  $total=$_REQUEST["hidTotal"];
  }
?>

    $id = $_POST["hidId"];
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css"  />


<script language="javascript" type="text/javascript">

function checkForm()
{

if (myForm.Name.value == 0)

{

alert ("You didn't enter your first name!");
return false;
}
if (myForm.SN.value == 0)

{

alert ("You didn't enter your Surname!");
return false;
}
if (myForm.City.value == 0)

{

alert ("You didn't enter your City!");
return false;
}

if (myForm.Address.value == 0)

{

alert ("You didn't enter your Address");
return false;
}

if (myForm.Postcode.value == 0)

{

alert ("You didn't enter your Post Code");
return false;
}
if (myForm.Address.value == 0)

{

alert ("You didn't enter your Address!");
return false;
}
if (myForm.cardnumber.value == 0)

{

alert ("You didn't enter your card detail!");
return false;
}
if (myForm.month.value == 0)

{

alert ("You didn't enter your month!");
return false;
}
if (myForm.year.value == 0)

{

alert ("You didn't enter your year!");
return false;
}


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
							<li><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="men.php">Mens</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="women.php">Womens</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="new.php">New</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<li><a href="contactus.php">Contact Us</a></li>
							</ul>
					</div>

</div>
	</div>




<!-- Body Image slider and side logo-->

<div id="main">


<!-- change from here for other pages-->




<p class="about_us">Payment</p>
<hr width="860px"/>

<div class="main_background">


<div class="content">

<?php
 echo "Total = $total\n";
?>

<form action="thankyou.php" method="post" Name="myForm" onSubmit="return checkForm()">

<fieldset>
<legend>Enter your details:</legend>

<table width="289" border="1">
  <tr>
    <th align="left" ><label>Name:</label></th>
    <th ><input type="text" name="Name" value="" /></th>
  </tr>
  <tr>
    <th align="left" ><label>Surname:</label></th>
    <th ><input type="text" name="SN" value="" /></th>
  </tr>
  <tr>
    <th align="left" ><label>Street:</label></th>
    <th ><input type="address" name="Address" value=""/></th>
  </tr>
  <tr>
    <th align="left" >City:</th>
    <th ><input type="city" name="City" value=""/></th>
  </tr>
  <tr>
    <th align="left" >Card type</th>
    <th ><label for="select"></label>
      <select name="select" id="select">
        <option>Master Card</option>
        <option>Visa</option>
        <option>American Express</option>
        <option>Solo</option>
        <option>Paypal</option>
      </select></th>
  </tr>
  <tr>
    <th align="left" ><label>Post Code:</label></th>
    <th ><input type="postcode" name="Postcode" value=""  maxlength="8"/></th>
  </tr>
  <tr>
    <th align="left" ><label>Card Number</label>
      :</th>
    <th ><input type="text" name="cardnumber" value=""  maxlength="8"/></th>
  </tr>
  <tr>
    <th align="left" >&nbsp;Expiry date:</th>
    <th ><label for="textfield"></label>
      <input name="month" type="text" id="textfield" size="4" maxlength="2" />
      /
      <label for="textfield2"></label>
      <input name="year" type="text" id="textfield2" size="4" maxlength="2" /></th>
  </tr>
</table>
<p>
  <input type="submit" name="btnSubmit" value="Confirm"/>
  <input type="reset" name="btnSubmit" value="Reset"/>
</p>

</fieldset>
</form>



</div><!-- closing of class aboutus_main-->
</div><!-- closing of class aboutus_background-->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</div><!-- id=main div close-->



<!--Footer-->
<div id="bottom">

	<hr/>

	<p class="copyright">Copyright &#169;  2011.  All Right Reserved</p>
	<p class="powered">Powered and Designed by <em>Deepesh Thapa(21110575)</em></p>

</div><!-- [end of the page]-->
</body>
</html>

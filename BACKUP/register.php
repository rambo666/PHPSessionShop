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
if (myForm.Pass.value == 0)

{

alert ("You didn't enter your Password!");
return false;
}

if (myForm.Address.value == 0)

{

alert ("You didn't enter your Address");
return false;
}
if (myForm.City.value == 0)

{

alert ("You didn't enter your City");
return false;
}
if (myForm.Postcpde.value == 0)

{

alert ("You didn't enter your Post Code");
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
				<a href="login.php">Log in</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="register.php">Register</a>

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




<p class="about_us">Registration</p>
<hr width="860px"/>

<div class="main_background">


<div class="content">



<form action="thankyou.php" method="post" Name="myForm" onSubmit="return checkForm()">

<fieldset>
<legend>Enter your details:</legend>

<p><label>Name</label>&nbsp;
<input type="text" name="Name" value="" />
</p>
<p><label>Surname</label>&nbsp;
<input type="text" name="SN" value="" />
</p>


<p><label>Password</label>&nbsp;
<input type="password" name="Pass" value=""/>
</p>

<p><label>Phone Number</label>&nbsp;
<input type="number" name="PN" value="eg:01234567899"/>
</p>
<p><label>Address</label>&nbsp;
<input type="address" name="Address" value=""/>
</p>

<p><label>City</label>&nbsp;
<input type="city" name="City" value=""/>
</p>

<p><label>Post Code</label>&nbsp;
<input type="postcode" name="Postcode" value=""  maxlength="8"/>
</p>
<p><label>Gender</label>&nbsp;
<select name="Gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
 </select>
</p>


<p><label>Submit</label>&nbsp;
<input type="submit" name="btnSubmit" value="Submit"/><input type="reset" name="btnSubmit" value="Reset"/>
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

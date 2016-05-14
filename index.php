<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css"  />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>

<style type="text/css">

.col1
	{
	position:absolute;
	}
.col1 a:link
	{
	text-decoration:none;
	color:#000000;
	font-size:20px;
	}
.col1 a:hover
	{
	text-decoration:none;
	color:#66CCFF;
	}
.table_home
	{
	position:relative;
	margin:auto;
	}
.store
	{
	color:#4D4D4D;
	text-align:center;
	}

#simplegallery1
{
position: absolute; /*keep this intact*/
float:right;
visibility: hidden; /*keep this intact*/
border: 0px;
}
</style>


<script type="text/javascript" src="simplegallery.js">

/***********************************************
* Simple Controls Gallery- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">

var mygallery=new simpleGallery({
	wrapperid: "simplegallery1", //ID of main gallery container,
	dimensions: [840, 400], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
	imagearray: [
		["slide1.jpg", "", "_new", "Best selection for her in WOODLAND"],
		["slide2.jpg", "", "", "Select variety of range price and offers this season"],
		["slide3.jpg", "", "", "Be formal"],
		["slide4.jpg", "", "", "Most wanted BOOT bonanza. select your range."]
	],
	autoplay: [true, 2500, 2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	oninit:function(){ //event that fires when gallery has initialized/ ready to run
		//Keyword "this": references current gallery instance (ie: try this.navigate("play/pause"))
	},
	onslide:function(curslide, i){ //event that fires after each slide is shown
		//Keyword "this": references current gallery instance
		//curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
		//i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
	}
})

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


<!-- change from here for other pages-->

	<div id="simplegallery1"></div><!-- end div for javascript[changing picture]-->



	<img src="sideshowpic.jpg" alt="Logo"/>
				<div class="col1"><a href="kidscollection.php">Click here</a></div>
		<img src="kidscollection.jpg" alt="kids Collection"/>


	<table border="0" class="table_home">
	<tr><th><h1 class="store">Store</h1><hr/></th><th width="25"></th><th><h1 class="store">Branch</h1><hr/></th><th width="25"></th><th><h1 class="store">Awards</h1><hr/></th></tr>
	<tr><td><p class="col_alignment"><img src="store.jpg" alt="Store" class="store1" height="100" width="130"/>The stores of Woodland dolor sit amet, consectetur adipiscing elit. Mauris pretium
			mollis eros, eget tempor enim aliquet sed. Aliquam pulvinar condimentum
			odio, eget ullamcorper nulla semper at. Nunc condimentum vehicula elit,
			pellentesque dictum tortor pellentesque eget. Pellentesque eu velit ligula,
			in vehicula nulla. Etiam id feugiat elit. Quisque vitae commodo mi. Fusce orci
			ante, feugiat non rutrum at, laoreet eu turpis.</p></td><td></td>









	<td><p class="col_alignment"><img src="branch.jpg" alt="Store" class="store1" height="100" width="130"/>Woodland branches dolor sit amet, consectetur adipiscing elit. Mauris pretium
						mollis eros, eget tempor enim aliquet sed. Aliquam pulvinar condimentum
						odio, eget ullamcorper nulla semper at. Nunc condimentum vehicula elit,
						pellentesque dictum tortor pellentesque eget. Pellentesque eu velit ligula,
						in vehicula nulla. Etiam id feugiat elit. Quisque vitae commodo mi. Fusce orci
						ante, feugiat non rutrum at, laoreet eu turpis.</p></td><td></td>



	<td><p class="col_alignment"><img src="awards.jpg" alt="Store" class="store1" height="100" width="130"/>Woodland award dolor sit amet, consectetur adipiscing elit. Mauris pretium
								mollis eros, eget tempor enim aliquet sed. Aliquam pulvinar condimentum
								odio, eget ullamcorper nulla semper at. Nunc condimentum vehicula elit,
								pellentesque dictum tortor pellentesque eget. Pellentesque eu velit ligula,
								in vehicula nulla. Etiam id feugiat elit. Quisque vitae commodo mi. Fusce orci
					ante, feugiat non rutrum at, laoreet eu turpis.</p></td><td></td>

	</tr>
	</table>





</div><!-- id=main div close-->



<!--Footer-->
<div id="bottom">

	<hr/>
		<p class="copyright">Copyright 2016.  All Right Reserved</p>
	<p class="powered">Powered and Designed by <em>Deepesh Thapa</em></p>

</div><!-- [end of the page]-->

<span id="phplive_btn_1363227663" onclick="phplive_launch_chat_0(0)" style="color: #0000FF; text-decoration: underline; cursor: pointer;"></span><script type="text/javascript">(function() { var phplive_e_1363227663 = document.createElement("script") ; phplive_e_1363227663.type = "text/javascript" ; phplive_e_1363227663.async = true ; phplive_e_1363227663.src = "//t2.phplivesupport.com/nicotine123/js/phplive_v2.js.php?q=0|1363227663|0|" ; document.getElementById("phplive_btn_1363227663").appendChild( phplive_e_1363227663 ) ; })() ;</script>


</body>
</html>


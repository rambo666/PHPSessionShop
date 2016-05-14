<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Show Item</title>
<meta name="keywords" content="KEYWORDS" />
<meta name="description" content="DESCRIPTION" />
<meta name="copyright" content="Tiram &copy; 2005" />
<link rel="stylesheet" href="default.css" type="text/css" media="all" title="Default styles" />
</head>
<body>
<h1>Show Item</h1>

<?php

  // fetch the txtId parameter that was passed to this page
  $txtId = $_REQUEST["radId"];

  // display it on screen to check it is correct
  echo " <p>txtId = $txtId</p>\n";

  // Connect to the server and select the database
  $connection = mysql_connect("soc.uwl.ac.uk", "21110575", "21110575");
  if ( ! $connection ) die("Cannot connect to server");


  $database = mysql_select_db("21110575");
  if ( ! $database ) die(" Cannot connect to database");



  // Set up and execute the query which will fetch the item from the fruit table
  $query = "SELECT * FROM ShoesWomen WHERE id=\"$txtId\" ";
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

  //  display the elements to check all is Ok
  echo "<p>The ID is $id</p>\n";
  echo "<p>The Name is $name</p>\n";
  echo "<p>The Price is $price</p>\n";
  echo "<p>The Description is $description</p>\n";
  echo "<p><img src=\"../women/$image\"/></p>\n";
?>

<form action="basket.php">
  <label>Quantity</label>
  <input type="hidden" name="hidId" value="<?php echo $id; ?>" />
  <input type="hidden" name="hidName" value="<?php echo $name; ?>" />
  <input type="hidden" name="hidPrice" value="<?php echo $price; ?>" />
  <input type="text" name="txtQty" value="" />
  <input type="submit" name="btnSubmit" value="Submit" />
</form>

</body>
</html>
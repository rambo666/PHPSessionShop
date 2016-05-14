<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Thankyou</title>
<meta name="keywords" content="KEYWORDS" />
<meta name="description" content="DESCRIPTION" />
<meta name="copyright" content="Tiram &copy; 2005" />
<link rel="stylesheet" href="default.css" type="text/css" media="all" title="Default styles" />

<style type="text/css">
  body {font-family: sans-serif; margin-left: 4cm;}
  table {width:50%; text-align: left; border-collapse: collapse;  background-color: #F0F0F0;}
  td {border: 1px black solid; padding: 4px;}
  th {background-color: white;}
  th#name {width: 40%;}
  th#value { width: 60%;}
</style>

</head>
<body>
<h1>Thankyou!</h1>

<p>
Your webpage has been received.  The parameters are shown below.
</p>

<table>
<tbody>
  <tr>
    <th id="name">Name</th>
    <th id="value">Value</th>
  </tr>

  <?php
    foreach ( $_REQUEST as $name=>$value )
    {
      if ( ! is_array($value) )
        echo "<tr><td>$name</td><td>$value</td></tr>\n";
      else
      {
        $params = $value;
        foreach ($params as $index=>$value)
          echo "<tr><td>$name" . "[$index]</td><td>$value</td></tr>\n";

      }
    }
  ?>

</tbody>
</table>
</body>
</html>


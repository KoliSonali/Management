<?php require('connection.php');?>

<html>
 <head>
  <title>Save Product</title>
 <link rel="stylesheet" href="css/bootstrap.css"/>
 </head> 
 <body>
 <div class="container">
<table class="table table-bordered">

<tr bgcolor=#2196F3><td align=center><font SIZE=6 color=white>My Inventory</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=clist.php>Categories</td><td align=center><a
href=plist.php>Products</td><td align=center><a
href=olist.php>Orders</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Save
Product</font></td></tr>
<?php

$name=trim($_POST["name"]);
$avail=trim($_POST["avail"]);
$ppub=trim($_POST["ppub"]);
$error=0;
if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Name
can't empty</font></td></tr>"; }
if ($avail=="") { $error=1; echo "<tr><td><font color=red
size=4>Availability can't empty</font></td></tr>"; }
if ($ppub=="") { $error=1; echo "<tr><td><font color=red
size=4>Address can't empty</font></td></tr>"; }
if ($error==0) {
 
 mysql_query("insert into product(pname,ppub,pavail,pshow)
values('".$name."','".$ppub."','".$avail."','Y')");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Inserted</font></td></tr>";
}
else {
 echo "<form name=oadd method=post action=psave.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Product Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Availability</td><td><input type=text name=spec
size=30 maxlength=30 value='".$avail."'></td></tr>";
 echo "<tr><td>Publication</td><td><input type=text name=spec
size=30 maxlength=30 value='".$ppub."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=submit
value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo"</div>";
echo"<div class="container-fluid" style="background-color:#F44336;color:#fff;height:70px;">";
echo"<footer><br><p><h4> Developed by Sonali Koli </h4></p></footer>";
echo "</body></html>";
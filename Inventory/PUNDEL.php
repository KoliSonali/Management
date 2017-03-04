<?php require('connection.php');?>
<html>
 <head>
  <title>Recover Product</title>
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
<tr bgcolor=black><td ><font size=4 color=white>Recover
Product</font></td></tr>
<?php

$rno=$_GET["rno"];
 
 
 mysql_query("update Product set pshow='Y' where pno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>Successfully Records Recovered</font></td></tr>";
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo"</div>";
echo"<div class="container-fluid" style="background-color:#F44336;color:#fff;height:70px;">";
echo"<footer><br><p><h4> Developed by Sonali Koli </h4></p></footer>";
echo "</body></html>"; 
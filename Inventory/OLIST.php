<?php
require('connection.php');
error_reporting(1);
?>
<html>
 <head>
  <title>BOOK INVENTORY</title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
 </head> 
 <body>
 <div class="container">
<table class="table table-bordered">

<tr bgcolor=#F44336><td align=center><font SIZE=6 color=#fff>My Inventory</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=clist.php>Category</td><td align=center><a
href=plist.php>Product</td><td align=center><a
href=olist.php>Order</td>
</table></td></tr>
<tr bgcolor=black><td ><font size=4 color=white>Orders
List</font></td></tr>
<tr><td><a href=app.php>Add New Orders</a></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Product
Name</td><td align=center>Category
Name</td><td align=center>Time</td>
<td align=center>Date</td><td
align=center>Options</td></tr>
<?php

if($_GET['rno']!=null)
{
$todel=$_GET['rno'];
mysql_query("update order SET oshow='N' where ono='$todel' ;");
}
$rs1=mysql_query("SELECT * from order where oshow='Y'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {

$rs2=mysql_query("SELECT pname from product where pno='$row[2]'");
$rs3=mysql_query("SELECT cname from cat where cno='$row[1]'");
$rs22=mysql_fetch_assoc($rs2);
$rs33=mysql_fetch_assoc($rs3);
 echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[cname]</td><td>$row[3]</td><td>$row[5]</td><td><a
href=olist.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=black><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Product
Name</td><td align=center>Category
Name</td><td align=center>Time</td>
<td align=center>Date</td><td
align=center>Options</td></tr>
<?php
$rs1=mysql_query("SELECT * from order where oshow='N'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {

$rs2=mysql_query("SELECT pname from product where pno='$row[2]'");
$rs3=mysql_query("SELECT cname from cat where cno='$row[1]'");
$rs22=mysql_fetch_assoc($rs2);
$rs33=mysql_fetch_assoc($rs3);
 echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[cname]</td><td>$row[3]</td><td>$row[5]</td><td><a
href=oundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=black>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
</table>
</div>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:70px;">
<footer>
<br>
  <p>
  <h4>  Developed by Sonali Koli </h4>
  </p>
</footer>
</body>
</html> 
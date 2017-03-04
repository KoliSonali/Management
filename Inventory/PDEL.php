<?php require('connection.php');?>
<html>
 <head>
  <title>Product delete Records</title>
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
<tr bgcolor=black><td ><font size=4 color=white>Product
List</font></td></tr>
<tr><td><a href=cadd.php>Add New Record</a></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Product
Name</td><td align=center>Publication</td><td
align=center>Options</td></tr>
<?php

$todel=$_GET['rno'];
mysql_query("update Product SET pshow='N' where pno='$todel' ;");
$rs1=mysql_query("SELECT * from product where pshow='Y' order by
pname;");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=pmod.php?rno=".$row[0].">Modify</a> | <a
href=pdel.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=black><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Product
Name</td><td align=center>Publication</td><td
align=center>Options</td></tr>
<?php
$rs2=mysql_query("SELECT * from product where pshow='N' order by
pname;");
$sno=1;
while( $row=mysql_fetch_array($rs2)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=pundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
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
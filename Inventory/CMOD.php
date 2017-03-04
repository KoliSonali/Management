<html>
 <head>
   <title>Modify Category</title>
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
<?php
require('connection.php');
error_reporting(1);
$rno=trim($_GET["rno"]);
$rs1=mysql_query("SELECT * from cat where cno='".$rno."'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {
 echo "<tr bgcolor=black><td ><font size=4 color=white>Edit Category
Details</font></td></tr>";
 echo "<form name=omod method=post action=cupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Category Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$row[1]."'></td></tr>";
 echo "<tr><td>Type</td><td><input type=text name=spec
size=30 maxlength=30  value='".$row[2]."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td colspan=2 align=center><input type=hidden name=rno value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
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
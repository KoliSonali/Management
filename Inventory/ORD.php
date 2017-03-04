<?php require('connection.php');?>
<html>
 <head>
  <title>Add Order</title>
 <link rel="stylesheet" href="css/bootstrap.css"/>
 </head> 
 <body>
 <div class="container">
<table class="table table-bordered">
<tr bgcolor=#2196F3><td align=center><font SIZE=6 color=#fff>My Inventory</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=clist.php>Categories</td><td align=center><a
href=plist.php>Products</td><td align=center><a
href=olist.php>Orders</td>
</table></td></tr>
<tr bgcolor=black><td ><font size=4 color=white>Add Orders</font></td></tr>
<form name=oadd method=post action=osave.php>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr><td>Product Id</td><td><select name=pid style="width:230px">
<?php


$rs1=mysql_query("SELECT * from product where pshow='Y' order by
pname;");
$sno=1;
?>
<option selected="selected" disabled="disabled">Product Id</option>
<?php
while( $row=mysql_fetch_array($rs1)) {
 $product_id=$row[0];
 $product=$row[1];
 ?>
	<option value="<?php echo $product_id ?>"><?php echo $product_id."  :  ".$product ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>
<tr><td>Category Id</td><td><select name=cat style="width:230px">
<option selected="selected" disabled="disabled">Category Id</option>
<?php

$rs2=mysql_query("SELECT * from cat where dshow='Y' order by
cname;");
$sno=1;
while($row1=mysql_fetch_array($rs2)) {
 $cat_id=$row1[0];
 $cat=$row1[1];
 ?>
	<option value="<?php echo $cat_id ?>"><?php echo $cat_id."  :  ".$cat ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>
<tr><td>Time</td><td><input type=text name=tim placeholder="hh:mm" size=30
maxlength=30></td></tr>
<tr><td>Date</td><td><input type=text name=dat placeholder="yy/dd/mm" size=30
maxlength=30></td></tr>
</table></td></tr>
<tr><td align=center><input type=submit value=Submit></td></tr>
</form>
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
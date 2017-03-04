<?php require('connection.php');?>
<html>
 <head>
  <title>Add Orders</title>
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
<tr bgcolor=black><td ><font size=4 color=white>Save
Orders</font></td></tr>
<?php

$pid=trim($_POST["pid"]);
$cat=trim($_POST["cat"]);
$tim=trim($_POST["tim"]);
$dat=trim($_POST["dat"]);
$error=0;
if ($pid=="") { $error=1; echo "<tr><td><font color=red size=4>Product's Name
can't empty</font></td></tr>"; }
if ($cat=="") { $error=1; echo "<tr><td><font color=red
size=4>Category Id can't empty</font></td></tr>"; }
if ($tim=="") { $error=1; echo "<tr><td><font color=red
size=4>Time can't empty</font></td></tr>"; }
if ($dat=="") { $error=1; echo "<tr><td><font color=red
size=4>Date can't empty</font></td></tr>"; }
if ($error==0) {
 
 mysql_query("insert into order(ocat,oproduct,otime,odate,oshow)
values('".$cat."','".$pid."','".$tim."','".$dat."','Y')");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Inserted</font></td></tr>";
}
else {
 echo "<form name=oadd method=post action=osave.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Product Id</td><td><input type=text name=name
size=30 maxlength=30 value='".$pid."'></td></tr>";
 echo "<tr><td>Category Id</td><td><input type=text name=spec
size=30 maxlength=30 value='".$cat."'></td></tr>";
 echo "<tr><td>Time</td><td><input type=text name=spec
size=30 maxlength=30 value='".$tim."'></td></tr>";
echo "<tr><td>Date</td><td><input type=text name=spec
size=30 maxlength=30 value='".$dat."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=submit
value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=olist.php>Continue...</a></td></tr>";
echo "</table>";
echo"</div>";
echo"<div class="container-fluid" style="background-color:#F44336;color:#fff;height:70px;">";
echo"<footer><br><p><h4> Developed by Sonali Koli </h4></p></footer>";
echo "</body></html>";
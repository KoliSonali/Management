<?php require('connection.php');?>
<html>
 <head>
  <title>Update Category</title>
 </head>
<body bgcolor="#eee">
<div class="container">
<table border="1" align=center width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#2196F3><td align=center><font SIZE=6 color=white>My Inventory</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=clist.php>Categories</td><td align=center><a
href=plist.php>Products</td><td align=center><a
href=olist.php>Orders</td>
</table></td></tr>
<tr bgcolor=black><td ><font size=4 color=white>Update
Category</font></td></tr>

<?php

error_reporting(1);
$rno=trim($_POST["rno"]);
$name=trim($_POST["name"]);
$type=trim($_POST["type"]);
$error=0; if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Name
can't empty</font></td></tr>"; }
if ($type=="") { $error=1; echo "<tr><td><font color=red
size=4>Type can't empty</font></td></tr>"; }
if ($error==0) {

 mysql_query("update cat set cname='".$name."',cspec='".$type."'
where cno='".$rno."'");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Updated</font></td></tr>";
}
else {
 echo "<form name=oadd method=post action=cupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Category Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Type</td><td><input type=text name=type
size=30 maxlength=30 value='".$type."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=hidden name=rno
value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=clist.php>Continue...</a></td></tr>";
echo "</table>"; 
echo"</div>";
echo"<div class="container-fluid" style="background-color:#F44336;color:#fff;height:70px;">";
echo"<footer><br><p><h4> Developed by Sonali Koli </h4></p></footer>";
echo "</body></html>";
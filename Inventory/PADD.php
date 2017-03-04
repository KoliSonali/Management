<?php require('connection.php');?>
<html>
 <head>
  <title>Add New Products</title>
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
<tr bgcolor=black><td ><font size=4 color=white>New
Product</font></td></tr>
<form name=oadd method=post action=psave.php>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr><td>Product Name</td><td><input type=text name=name size=30
maxlength=30></td></tr>
<tr><td>Availability</td><td><input type=text name=avail size=30
maxlength=30></td></tr>
<tr><td>Publication</td><td><input type=text name=pub size=30
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
<?php
session_start();
error_reporting(1);
if(!mysql_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("inventory");
 
 extract($_POST);
 if(isset($signIn))
 {
	//echo $user,$pass;
	//for Admin
	$que=mysql_query("select user,pass from admin where user='$user' and pass='$pass'");
	 $row= mysql_num_rows($que);
	 if($row)
	 {
		$_SESSION['admin']=$user;
		echo "<script>window.location='olist.php'</script>";
		
		//include('olist.php');
	 	
	 }
	 else
	 {
	  $err="<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid admin Login</font>";
	 }
	
 
 }
if($_SESSION['admin']!="")
{
header('olist.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signIn.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    
	
	<h2 style="background:black;padding:13px;color:#FFFFFF;margin:0px;" align="center">
	<span>Inventory Management System</span>
	</h3>
	<div class="container">
<form method="post" class="form-signin">

        <label><?php echo $err; ?></label>
		<label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="user" class="form-control" placeholder="admin@gmail.com" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="admin" required>
        
<button class="btn btn-lg btn-primary btn-block" name="signIn" type="submit">Sign in</button>
      </form>
 </div> 
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

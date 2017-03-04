<?php
error_reporting(1);
$rno=$_GET["rno"];
 require('connection.php');
 mysql_query("update order set oshow='Y' where ono='$rno'");
 header('location:olist.php');
 ?>
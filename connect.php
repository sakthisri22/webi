<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["d"];
$d=$_POST["g"];
$e=$_POST["e"];
$f=$_POST["p"];
$g=$_POST["s"];
$con=mysql_connect("localhost","root","");
mysql_select_db("kf");
mysql_query("insert into class(n,a,d,g,e,p,s) values('$a','$b','$c','$d','$e','$f','$g')");
echo("Registered successfully");
include("reg.php");
mysql_close($con);
?>
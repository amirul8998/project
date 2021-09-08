<?php
$a=$_POST['name'];
$b=$_POST['mail'];
$c=$_POST['ID'];
$d=$_POST['phone'];
$e=$_POST['pass'];
$f=$_POST['dept'];
$con=mysqli_connect("localhost", "root", "amirul722158", "project");

$sql= "insert into student (Name, Email, ID, Phone, Password, Dept) values('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$sql);

// *** Connection Test **** 
//if ($con)
//	echo "Successfully Connect";

// *** Redirect Another Page 

header('location:index.html');

?>
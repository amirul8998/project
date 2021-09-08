<?php
$a=$_POST['old'];
$b=$_POST['new'];

$con=mysqli_connect("localhost", "root", "amirul722158", "project");

$sql= "update student set password='$b' where password='$a'";
mysqli_query($con,$sql);

header('location:profile.html');


?>
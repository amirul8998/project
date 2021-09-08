<?php
$a=$_POST['mail'];
$b=$_POST['pass'];

$con=mysqli_connect("localhost", "root", "amirul722158", "project");

$sql= "select * from student where Email='$a' and Password='$b'";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
if($count==1){
echo "Successfully Login";
header('location:https://brain-code.xyz/project');}
else
        echo "Invalide Email or Password";






?>

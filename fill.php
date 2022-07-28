<?php
$host="localhost";
$user="root";
$pass="";
$db="Jobsite";
$con=mysqli_connect($host,$user,$pass,$db);
$tick=$_POST['tick'];
$email=$_POST['email'];
$msg=$_POST['msg'];
if(!$con)
{
    die("Not able to connect".mysqli_connect_error());
}
$query="Insert into applies(ticketNo,email,msg) VALUES('$tick','$email','$msg')";

if(mysqli_query($con,$query))
{
   echo "<script>";
   echo "alert('applied!');";
   echo "location.href='mainpage.php';";
   echo "</script>";
}
else{
    echo "mysqli_connect_error()";
}
?>
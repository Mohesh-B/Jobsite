<?php
$host="localhost";
$user="root";
$pass="";
$db="Jobsite";
$con=mysqli_connect($host,$user,$pass,$db);
$ct=$_POST['company'];
$email=$_POST['email'];
$typ=$_POST['typ'];
$sal=$_POST['sal'];
$des=$_POST['des'];
$job=$_POST['job'];
if(!$con)
{
    die("Not able to connect".mysqli_connect_error());
}
$query="Insert into posts(CompanyTitle,email,JobType,Salary,JobDescribe,job) VALUES('$ct','$email','$typ','$sal','$des','$job')";
if(mysqli_query($con,$query))
{
   echo "<script>";
   echo "alert('Posted');";
   echo "location.href='mainpage.php';";
   echo "</script>";
}
else{
    echo "mysqli_connect_error()";
}
?>

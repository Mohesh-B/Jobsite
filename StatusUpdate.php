<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db="Jobsite";
 $sql="";
 $an=$_POST['an'];
 $con=mysqli_connect($host,$user,$pass,$db);
 if(!$con)
     {
         die("Not able to connect".mysqli_connect_error());
     }
$ans=$_POST['choice'];
$an=$_POST['an'];
if($ans=="ACCEPT")
{
    
    $sql="UPDATE applies SET status= 'Accepted You will be further contacted by the company via your email.' WHERE Applynumber=$an; ";
    $mail=mysqli_query($con,$sql);
    $mail=mysqli_fetch_array(mysqli_query($con,"select email from applies where Applynumber='$an'"));
    foreach($mail as $ma)
    {
    
    echo "<script>alert('Thankyou!!You can further contact the applicant via the email:$ma');</script>";
    echo "<script>location.href='mainpage.php'</script>";
    }
}
else if($ans=="REJECT")
{
    $sql1="INSERT INTO rejects (an,email) VALUES('$an',$mail)";
    mysqli_query($con,$sql1);
    $sql="DELETE FROM applies WHERE Applynumber='$an'";
    if(mysqli_query($con,$sql))
    {
    echo "<script>alert('We are very sorry that it did not meet your criteria!');</script>";
    echo "<script>location.href='mainpage.php'</script>";
}
else{
    echo "<script>alert('Invalid Input:FOLLOW THE INSTRUCTIONS!');</script>";
    echo "<script>location.href='mainpage.php'</script>";
}
}
?>

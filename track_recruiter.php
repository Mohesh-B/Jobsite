<html>
    <head>
        <link rel="stylesheet" href="track_recruiter.css">
        <title>JobLists</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style>
            body{
              font-family: "Audiowide", sans-serif;
            }
        </style>
</head>
<body>
<header>
            <ul>
                <li><img id="logo" src="JobLance-logos_black.png"></li>
                <LI><h3 style="color:black">  JobLance</H3></LI>
               <!-- <li><a href="jobs.php" class="t" style="float:right;position:absolute;font-size:20px;">PageUP</a></li>-->
                <li><a href="mainpage.php">Home</a></li>
                <li><a href="login.html">Track</a></li>
            
            </ul>
        </header>
        <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="Jobsite";
        $count=0;
        $con=mysqli_connect($host,$user,$pass,$db);
        if(!$con)
            {
                die("Not able to connect".mysqli_connect_error());
            }
        $email=$_POST['email'];
        $tcn=$_POST['tcn'];
        $check="SELECT  ticketNo FROM Posts WHERE email='$email' AND ticketNo='$tcn'";
        if($res=mysqli_query($con,$check))
        {
            echo mysqli_num_rows($res);
        
            if(mysqli_num_rows($res)!=0)
            {
            echo"<center>";
                echo "<h1>Responses</h1>";
            while($row=mysqli_fetch_array($res))
            {
               
                    $query="SELECT * FROM applies WHERE ticketNo='$tcn'";
                    if($res1=mysqli_query($con,$query))

                        {
                            if(mysqli_num_rows($res1)!=0)
                            {
                            while($row1=mysqli_fetch_array($res1))
                            {
                                $count+=1;
                        if($count%2==0)
                        {
                            echo "<br>";
                            echo"<table class='container-table'>";
                        
                        }
                        else{
                            echo "<br>";
                            echo"<table class='container-tabl'>";
                        }
                        
                        echo"<br>";
                        echo "<tr>";
                        echo "<td class='table-content'><h1>Application Number:".$row1['Applynumber']."</h1>";
                        echo "<h3>ticket-No:".$row1['ticketNo']."</h3>";
                        echo "<div class='content'>";
                        echo "Appicant message to You:<br><br>".$row1['msg'];
                        echo "<br>";
                        echo "<form action='StatusUpdate.php' method='POST'>";
                        echo "<input type='text' name='choice' placeholder='Enter ACCEPT to accept and REJECT to reject(Case sensitive)'>";
                        echo"<input type='text' name='an' placeholder='To Confirm enter the application number'>";
                        echo "<button class='button' type='submit' style='vertical-align:center;text-align:center;'><span>Submit</span></button></form>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</table>";
                            }
                            mysqli_free_result($res1);
                        }
                    
                        else if(mysqli_num_rows($res1)==0)
                        {
                            echo "<h1>No responses Yet</h1>";
                        }
                    }
                        echo "</center>";
                    break;
                    
                }
            
            
          
            }
            else if(mysqli_num_rows($res)==0) {

                echo "<script>alert('Invalid email or ticket no ')</script>";
                echo "<script>location.href='login.html'</script>";
            }
        }
     
        ?>
        </body>
        </html>

        
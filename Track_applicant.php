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
        <center>
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
            $sql="Select * from applies where email='$email'";
            if($res=mysqli_query($con,$sql))
            {
                if(mysqli_num_rows($res)!=0)
                {
                    echo"<h1>Application Status</h1>";
                    while($row=mysqli_fetch_array($res))
                    {
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
                    echo "<td class='table-content'><h1>Application Number:".$row['Applynumber']."</h1>";
                    echo "<h3>ticket-No:".$row['ticketNo']."</h3>";
                    echo "<div class='content'>";
                    echo "<h3>Status:".$row['status']."</h3>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</table>";
                        }
                        
                    }
                    mysqli_free_result($res);
                }
                echo"<h1>Rejected Applications:</h1>";
              $sql1="Select * from rejects where email='$email'";
            if($res1=mysqli_query($con,$sql1))
            {
                if(mysqli_num_rows($res1)!=0)
                {
                    while($row1=mysqli_fetch_array($res1))
                    {
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
                    echo "<td class='table-content'><h1>Application Number:".$row1['an']."</h1>";
                    echo "<div class='content'>";
                    echo "<h3>Status:".$row1['status']."</h3>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</table>";
                        }
                        
                    }
                    mysqli_free_result($res1);
                }
                }
            }
            ?>
            </center>
        </body>
        </html>

            
            
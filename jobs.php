<html>
    <head>
        <link rel="stylesheet" href="jobs.css"/>
        <title>JobLists</title>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style>
            body{
              font-family: "Audiowide", sans-serif;
            }
        </style>
        <script>
            function check{
                var c=document.getElementById('user-msg').value;
                if(c=="")
                {
                    alert('Fill the text area!');
                    return false;
                }
                return true;
                       }
                </script>
                       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    </head>
<body>
<header>
            <ul>
                <li><img id="logo" src="JobLance-logos_black.png"></li>
                <LI><h3 style="color:black">  JobLance</H3></LI>
               <!-- <li><a href="jobs.php" class="t" style="float:right;position:absolute;font-size:20px;">PageUP</a></li>-->
                <li><a href="mainpage.php">Home</a></li>
                <li><a href="login.html">Login</a></li>
            
            </ul>
        </header>
        <center>
        <div class="container">
<h1 style="text-align:center;background-img:linear-gradient(to right, #ff9966, #ff5e62);;">JOBS AVAILABLE</h1>
    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="Jobsite";
        $post="posts";
        $con=mysqli_connect($host,$user,$pass,$db);
        if(!$con)
            {
                die("Not able to connect".mysqli_connect_error());
            }
        $sql="SELECT * from $post ";
        if($res=mysqli_query($con,$sql))
            {
                if(mysqli_num_rows($res)>0)
                {
                    echo"<div class='table'>";
                    $count=0;
                    while($row=mysqli_fetch_array($res))
                    {
                        
                        //(CompanyTitle,email,JobType,Salary,JobDescribe)
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
                        echo "<td class='table-content'><h1>".$row['job']."</h1>";
                        echo "<h5>ticket-No:".$row['ticketNo']."</h5>";
                        echo "<div class='content'>";
                        echo "Company:".$row['CompanyTitle'];
                        echo "<br>";
                        echo "Job Type:".$row['JobType'];
                        echo "<br>";
                        echo "Salary:".$row['Salary']."$ per annum";
                        echo "<br>";
                        echo "Job Type:".$row['JobType'];
                        echo "<br>";
                        echo "Job Description:".$row['JobDescribe'];
                        echo"<br><br></div><form action='fill.php' method='POST'><input type='text' name='tick' placeholder='Enter the ticket no. you see above'><input type='email' name='email' placeholder='Enter your email'/><textarea placeholder='Enter why you think the company should hire you!' name='msg' id='user-msg' required></textarea>";
                        echo "<button class='button' type='submit' style='vertical-align:middle' onsubmit=check()><span>apply</span></button></form>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</table>";
                        
                    }
                    
                    echo "</div>";
                    mysqli_free_result($res);
                }
            }
    ?>    
        </center>
        </body>    
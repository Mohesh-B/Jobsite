<html>
    <head>
        <style>
            body{
              font-family: "Audiowide", sans-serif;
            }
        </style>
        <meta charset="utf-8">
        <Title>Homepage</Title>
        <link rel="stylesheet" href="mainpage.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        <header>
            <ul>
                <li><img id="logo" src="JobLance-logos_transparent.png"></li>
                <LI><H3>  JobLance</H3></LI>
                <li><a href="#home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#contact">Contact-Us</a></li>
                <li><a href="login.html">Track</a></li>
            </ul>
        </header>
        <div class="sec2">
        
            <video autoplay="autoplay" loop="true" muted >
              <source src="play.mp4" type="video/mp4">
              Your browser does not support HTML video.
            </video>
        </div>
        <div class="content">
                <h1>
                    Join The Best , Be The Best<br>
                </h1>
                <h4>Millions of people use JobLance.com to turn<br>Their dreams into reality</h4>
                <button type="button" class="glow-on-hover" onclick="location.href='post.html';">Post the Dream-Job</button>
                <button type="button" class="glow-on-hover" onclick="location.href='jobs.php';">Search your Dream-Job</button>
        </div>
        <div class="About" ><a name="About"></a>
            <table style="padding:15px;">
            <tr>
            <td><h1 style="font-size:50px;font-weight:bolder">Choose from endless possibilities</h1><br></td><td rowspan="2"><img src="workpeople.jpg" width="100%" height="100%"></td></tr>
            <tr><td><h3 style="font-weight:lighter;color:rgba(0, 0, 0, 0.616)">Get the right type of employee for your work or<br> the right type of work you want to be hired for,<br>exactly how you want it.<br>Turn that spark of your dream into reality.</h3></td></tr></div>
            </table>    <br>
            
            <table style="padding:35px;">
                <tr><td colspan="2"><h1 style="font-weight:bolder;">Need something done?</h1></td></tr>
                <tr><td><img src="size proj.png" height="50px" ><td width="600px"><h3 >Post a job</h3><td width="20px"><img src="icon2 (8).png" height="70px" width="70px"></td><td><h3 style="margin-left:4px;">Choose freelancers</h3></td></tr>

                <tr><td colspan="2" width="500px"><p style="font-weight:lighter;color:rgba(0, 0, 0, 0.616)"><br>It's free and easy to post a job.<br> Simply fill in a title, description and salary and<br> competitive offers come within minutes.</p></td><td colspan="2"><p style="font-weight:lighter;color:rgba(0, 0, 0, 0.616)">No job is too big or too small.<br>We've got freelancers for jobs of any size or budget, across multiple skills<br>. No job is too complex. We can get it done!</p></td></tr>

                <tr><td ><img src="icon (2).png" height="50px" ><td width="600px"><h3 >Pay safely</h3></td><td><img src="icon2 (5).png" height="70px" width="70px"></td><td><h3 style="margin-left:4px;">We're here to help</h3></td></tr>

                <tr><td colspan="2" width="500px"><p style="font-weight:lighter;color:rgba(0, 0, 0, 0.616)"><br>We don't interfere in your payscale and we do not take any share from you!.<br>You can anytime alter your pay details before the offer has been accepted!.</p></td><td colspan="2"><p style="font-weight:lighter;color:rgba(0, 0, 0, 0.616)">Our talented team of recruiters can help you find the best employee for the job and our technical support team will anytime respond to queries via mail feature. </p></td></tr>

                <tr><td ><img src="icon2 (7).png" height="50px" ><td width="600px"><h3 >Track progress</h3></td><td><img src="icon2 (6).png" height="70px" width="70px"></td><td><h3 style="margin-left:4px;">Verified posts</h3></td></tr>

                <tr><td colspan="2" width="500px"><p style="font-weight:lighter;color:rgba(0, 0, 0, 0.616)"><br>Keep up to date with responses as we send you the responses via email services.<br>Thus you Always know what kind of responses are up to</p></td><td colspan="2"><p style="font-weight:lighter;color:rgba(0, 0, 0, 0.616)">Find job post and professionals you can trust as<br> we have already verified the profiles of employees and trustability of the post </p></td></tr>
            </table>
        </div>
        <div class="sec31" id="contact">
            <div class="sec32">
        <center>
                <h1>Contact-Us:</h1>
                <form action="contact.php" method="post">
                    <input type="text" placeholder="Name" id="name"/><br>
                    <input type="email" placeholder="Email-id" id="email"/><br>
                    <textarea placeholder="How can we help you?" id="msg"></textarea><br>
                    <input type="submit" value="Send"> 
                </form>
        </center>
    </div>
</div>
    </body>
</html>
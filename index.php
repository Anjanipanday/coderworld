<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link href="css/hover.css" rel="stylesheet" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
    var arr=["a.jfif","a1.jfif","a2.jfif","a6.jfif"];
    var i=0;
    function slider()
    {
        document.getElementById("img1").src = "img/" + arr[i];
        i++;
        if(i==arr.length)
        {
            i = 0;
        }
        window.setTimeout("slider()", 3000);
    }
    window.onload = slider;
</script>
<style>
    body {
        overflow-x: hidden;
    }
</style>
</head>
<body>
        <div class="container-fluid">
		<div class=" row">
		<div class="col-sm-12" style="min-height:40px;background:black;">
		<a style="margin-left:30px;"><span class="fa fa-phone" style="color:white;line-height:2.3;font-size:17px">&nbsp;&nbsp;&nbsp;91-9336541604</span></a>
		<a style="margin-left:30px;"><span class="fa fa-envelope" style="color:white;line-height:2.3;font-size:17px">&nbsp;&nbsp;&nbsp;coderworld@gmail.com</span></a>
		<a style="margin-left:850px;"><span class="fa fa-instagram" style="color:white;line-height:2.3;font-size:17px"></span></a>
		<a style="margin-left:30px;"><span class="fa fa-facebook" style="color:white;line-height:2.3;font-size:17px"></span></a>
		<a style="margin-left:30px;"><span class="fa fa-twitter" style="color:white;line-height:2.3;font-size:17px"></span></a>
		<a style="margin-left:30px;"><span class="fa fa-linkedin" style="color:white;line-height:2.3;font-size:17px"></span></a>
		</div>
		</div>
            <div class=" row" style="border-bottom:1px solid black;">
                <div class="col-sm-2" style=" min-height:80px;">
                    <div class="row">
                        <img src="img/logo.png" style="height:70px;width:100%;margin:10px;"/></div>
                    </div>
                <div class="col-sm-10" style="min-height:80px;">
                  <nav class="navbar navbar-default"style="min-height:60px;color:black;width:100%;border:none;background:none;margin-top:10px">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                     </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"style="font-size: 25px;line-height:40px;font-weight: bold; color:black;font-family: Gabriola">Home</a></li>
                            <li><a href="aboutus.php" style="font-size: 25px;line-height:40px; font-weight: bold; color:black; font-family: Gabriola">About us</a></li>
                            <li><a href="became.php" style="font-size: 25px; line-height:40px;font-weight: bold; color:black;font-family: Gabriola">Become Member</a></li>
                            <li><a href="course.php" style="font-size: 25px;line-height:40px; font-weight: bold; color:black; font-family: Gabriola">Courses</a></li>
                            <li><a href="contact.php" style="font-size: 25px;line-height:40px; font-weight: bold; color:black; font-family: Gabriola">Contactus</a></li>
                            <li><a href="review.php" style="font-size: 25px;line-height:40px; font-weight: bold; color:black; font-family: Gabriola">Review</a></li>
                            <li><a href="practices.php" style="font-size: 25px;line-height:40px; font-weight: bold; color:black; font-family: Gabriola">Practice</a></li>
                            <li><a href="login.php" style="font-size: 25px;line-height:40px; font-weight: bold; color:black; font-family: Gabriola">Login</a></li>
                       </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
             </div>
          </div>
            
 <div class="col-sm-12" style="min-height:300px;width:100%;">
 <img src="img/a.jfif"style="height:380px;width:100%;"id="img1"/></div>
<div class="row" >
<h1 style="font-size:55px;line-height:2.6;font-family: Gabriola;text-align:center;color:maroon;font-weight:bold">Home</h1>
<div class="col-sm-1"></div>
<div class="col-sm-6">
<p style="font-size: 25px; color: black; font-family: Gabriola;text-align:justify">Our Coder world is a knowledge base blog. where you can learn ,find solutions on heigh level language like as:c#,c++ ,python ...etc
you can find your problem solutions by discussion form where you can upload your problem and many user see your problem and they give solutions.
By Became member you join my blog as a member.By Courses you can read hegh level language...java, php, python...etc
you are also do practice in any highlevel language by practice menu.It Is provides a platform to
 meet, learn and share their knowledge in the fields of Programming.It is to encourage students to learn about
 competitive coding and enhance their problem-solving skills. </p>
 <p style="font-size: 28px; color: maroon; font-family: Gabriola;text-align:right;font-weight:bold">-Anjani Panday</p>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4" style="min-height:450px;background:silver;border:0px solid black;">
        <div class="row" style="background: maroon; text-align: center; font-size: 35px; padding-top: 3px; font-weight: bold; color: white; font-family: Gabriola">Updates Notification</div>
        <marquee style="font-size: 25px; color: black; font-family: Gabriola" direction="up" height="350px" onmouseover="stop()" onmouseout="start()">
            <ul>
                <li> Python 3.9 was released on October 5th, 2020.</li><br/>
                <li>Client-side JavaScript is very fast as it can be run quickly in the client-side browser</li><br />
                <li> PHP 7.4, the next PHP 7 minor release, has been released for General Availability as of November 28th, 2019.</li><br />
                <li> C++ 17 is the most recent version of C++ programming language revised by ISO/IEC 14882 standard</li><br />
                <li>The Oracle Java License has changed for releases starting April 16, 2019. </li><br />
                <li>Python 3.9. 0 is the newest major release of the Python programming language, and it contains many new features and optimizations.</li><br />
			</ul>
        </marquee>
    </div>
</div>
<div class="row" style="margin-top:70px">
       <h1 style="font-size:55px;color:maroon;text-align:center;font-weight:bold;font-family:Gabriola">News Updates</h1>
    <div class="row" style="margin-top:20px">
        <div class="col-sm-3" style="height:300px;">
            <img src="img/u.jpg" style=" height: 300px;width:100%" class="img img-thumbnail hvr hvr-pulse" /></div>
        <div class="col-sm-3" style="height:300px;">
<h3 style="font-family:Gabriola;font-size:30px;font-weight:bold;color:maroon;">For becoming skilled at all in-one phython language</h3>
            <p style ="font-size:25px;color:black;font-family:Gabriola">19dec,2020</p>
            <p style ="font-size:25px;color:gray;font-family:Gabriola"> you should begin learning Python language that has the ability to expend web apps,data analysis,usr interfaces,and much more,and frameworks are
                also available for these tasks.
                </p>
</div>
        <div class="col-sm-3" style="height:300px;">
            <img src="img/u1.jpg" style="height:300px;width:100%" class="img img-thumbnail hvr hvr-pulse" /></div>
        <div class="col-sm-3" style="height:300px;">
            <h3 style="font-family:Gabriola;font-size:30px;font-weight:bold;color:maroon;">About the top-most programming language</h3>
            <p style ="font-size:25px;color:black;font-family:Gabriola">28dec,2020</p>
                <p  style ="font-size:25px;color:gray;font-family:Gabriola"> Java is considered as the programming language and programmers to learn.it has grabbed the highst position with android OS yet again,though
                    it was a bit down a few years ago. </p></div>
    </div>
    <div class="row" style="margin-top:30px">
        <div class="col-sm-3" style="height:300px;">
            <img src="img/u2.jpg" style="height:300px;width:100%" class="img img-thumbnail hvr hvr-pulse" /> </div>
        <div class="col-sm-3" style="height:300px;">
            <h3 style="font-family:Gabriola;font-size:30px;font-weight:bold;color:maroon;">The web devlopers should learn about PHP</h3>
            <p style ="font-size:25px;color:black;font-family:Gabriola"> 16jan,2021</p>
                <p  style ="font-size:25px;color:gray;font-family:Gabriola">with the help of PHP, you can enlarga a web app very quickly and effortlessly.PHP is really a valuble programming language for the devopers and programmers.</p></div>
        <div class="col-sm-3" style="height:300px;">
            <img src="img/u3.jpg" style="height:300px;width:100%" class="img img-thumbnail hvr hvr-pulse" /></div>
        <div class="col-sm-3" style="height:300px;">
            <h3 style="font-family:Gabriola;font-size:30px;font-weight:bold;color:maroon;">For in cluding animations animations on the web page</h3>
            <p style ="font-size:25px;color:black;font-family:Gabriola">25jan,2021</p>
            <p  style ="font-size:25px;color:gray;font-family:Gabriola">While your  are expending your site,java Script is extremly fuctional as this language can immensely assist you in generating the communication for your website.</p></div>
  </div>
        <div class="row" style="height:40px;margin-top:10px;">
         <div class="col-sm-5"style="height:40px;"></div>
            <div class="col-sm-2" style="min-height:40px;margin-top:40px">
                <button style="background:black;font-weight:bold;height:40px;width:100%;"><a href="course.html" style="color:white">VIEW MORE</a></button>
            </div>
            <div class="col-sm-5" style="height:40px;"></div>
        </div>
</div>
<div class="row" style="margin-top:20px;min-height:500px;border-bottom:2px solid gray;">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="row" style="border-bottom:2px solid gray">
<h1 style="font-family: Gabriola;color:maroon;font-weight:bold;font-size:55px;margin-top:50px;text-align:center">Client's Feedback</h1>
<div class="col-sm-2"></div>
<div class="col-sm-8" style="min-height:200px;border-top:2px solid gray">
<p style="font-size: 25px; color: black; font-family: Gabriola;margin-top:40px;">Our organization has been working with Web Design Company from before However,recently opted  for Coder World after lots of research and suggestion,And belive me ,it was our best decision because Coder World team have an excepted putting each plan to excute the way clients want with perfection and hassle-fee method.</p>
<p style="font-size: 30px; color: maroon;font-weight:bold; font-family: Gabriola;text-align:right">-Monty<br/>
<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span></p>
</div>
<div class="col-sm-2"></div></div>
<div class="row">
<div class="col-sm-4" style="min-height:250px;margin-top:20px;">
<p style="font-size: 25px; color: black; font-family: Gabriola">My Website really looks excellent with every minor feature available, Most Importantly I was really impressed with technique.Coder World use to make the website look great.Thank you,Coder world for the wonderful service.</p>
<p style="font-size: 30px; color: maroon;font-weight:bold; font-family: Gabriola;text-align:right">-Pooja<br />
<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span></p>
</div>
<div class="col-sm-4" style="min-height:250px;margin-top:20px;">
<p style="font-size: 25px; color: black; font-family: Gabriola">Coder World Did an impresseive job in creating the website exactly the way i wanted.Also gave a great insight into idea sharing and an idea taking with full transparency throughout the project.Thank you Coder World .</p>
<p style="font-size: 30px; color: maroon;font-weight:bold; font-family: Gabriola;text-align:right">-John<br/>
<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span></p>
</div>
<div class="col-sm-4"style="min-height:250px;margin-top:20px;">
<p style="font-size: 25px; color: black; font-family: Gabriola">I am really with the kind of service Coder World provided and highliy appreciate the effort they made towards each minor section of the website.I would really recommend both the large and small companies to undoubtedly go for Coder World.</p>
<p style="font-size: 30px; color: maroon;font-weight:bold; font-family: Gabriola;text-align:right">-Prakash<br/>
<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span>&nbsp;<span class="fa fa-star" style="color:gold;font-size:18px"></span></p>
</div>
</div></div>
</div>
<div class="row" style="margin-top:40px">
<div class="col-sm-7">
<h1 style="font-size:55px; color:maroon;font-weight:bold; font-family: Gabriola">Importance of Programming Languages</h1>
<p style="font-size: 25px; color: gray;font-family: Gabriola;margin-top:50px">Programming languages are used in computer programming to impliment algoritems.
Most programming languages consist of instructions for computers.There are programmable machines that use a set of specific instructions, rather then gerenral programming languges.This programs for these machines did not produce different behavior in responce to different inpts or conditions.
Programming language share properties with natural languages to related to their purposeas vehicles for communication,having a syntactic form separate from its semantics, and showing language families of related language branching one from another.</p>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4">
<video controls="autoplay" style="height:250px;width:450px;margin-top:100px">
<source src="img/codeorg.mp4" />
</div>
</div>




</div>
<div class="row" style="background:black;margin-top:60px;min-height: 300px; font-size: 23px; color: white; font-family: Gabriola;font-weight:bold">
                <div class="col-sm-3" style="margin-left:30px">
                  <h1>Information</h1><hr>
				  <ul>
				  <li>AboutUs</li>
				  <li>Contactus</li>
				  <li>Becomemember</li>
				  <li>Review</li>
				  <li>Courses</li>
				  <li>Practice</li>
                </ul></div>
                <div class="col-sm-3">
                    <h1> Contact us</h1>
                    <hr>
                    <span class="fa fa-phone"></span>&nbsp;&nbsp;&nbsp;+91-9336541604<br>
                    <span class="fa fa-envelope"></span>&nbsp;&nbsp;&nbsp;coderworld@gmail.com<br>
                    <span class="fa fa-fax"></span>&nbsp;&nbsp;&nbsp;MMIT Siddharthanagar (Bansi)<br>
                    </div>
					<div class="col-sm-2">
					<h1>Follow Us:</h1><hr>          
					<img src="img/facebook.png"style="height:35px;width:40px;float:left;margin-left:5px" /> 
                        <img src="img/linkedin.png" style="height: 30px; width: 40px; float: left; margin-left: 5px" />
                        <img src="img/twitter.png" style="height: 30px; width: 40px; float: left; margin-left: 5px" />
                        <img src="img/instagram.png" style="height: 35px; width: 40px; float: left; margin-left: 5px"/>
                     </div>
                <div class="col-sm-3">
                  <h1>Categories</h1><hr>
                <button style="background:black;padding-left:5px">ANGULAR</button> <button style="background:black;padding-left:5px">ASP.NET</button> <button style="background:black;padding-left:5px">C#</button> <button style="background:black;padding-left:5px">DOT NET</button> <button style="background:black;padding-left:5px">GENERAL</button> <button style="background:black;padding-left:5px">INTERVIEW QUESTIONS</button> <button style="background:black;padding-left:5px">JAVA</button>
 <button style="background:black;padding-left:5px" >JAVA 8</button><button style="background:black;padding-left:5px">PYTHON</button><button style="background:black;padding-left:5px">SQL SERVER</button> <button style="background:black;padding-left:5px">TIPS/TRICS</button> <button style="background:black;padding-left:5px">WEB AP</button>
                    
              </div>
            </div>
<div class="row">
<div class="col-sm-12" style="background:maroon"><p style="color:white;font-family:Gabriola;font-size:20px;text-align:center">Copyright&copy; MMIT Siddharthanagar & Devloped by A2RP</p></div>
</div>

</body>
</html>

<?php include('dbconnect.php') ?>
<!DOCTYPE html>
<html>
<head>
<!-- CSS -->
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap1.css"/>
<!-- End CSS -->
<!-- meta elements -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="some description">
<meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
<meta name="author" content="Antonijo Lelas">
<style type="text/css">
    <!--
    .style1 {
        font-family: Arial, Helvetica, sans-serif
    }

    -->
</style>
<title>News</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


</head>
<body bgcolor=": #99ddff">

<header>


</header>
<div class="container-fluid">
    <img src="img/webdevelopment.jpg" alt="Web development" class=".img-fluid. max-width: 100%; height: auto;">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="dropdown">
                <a href="news.php" class="dropbtn">News</a>
                <div class="dropdown-content">
                    <a href="news-1.php#html">Html</a>
                    <a href="news-1.php#css">Css</a>
                    <a href="news-1.php#js">JavaScript</a>
                    <a href="news-1.php#php">Php</a>
                    <a href="news-1.php#mysql">MqSql</a>
                    <a href="news-1.php#xml">xml</a>
                    <a href="news-1.php#aspnet">Asp.net</a>
                    <a href="news-1.php#csharp">C#</a>
                    <a href="news-1.php#jquery">JQuery</a>
                    <a href="news-1.php#java">Java</a>
                </div>
            </li>

            <li><a href="contact.php">Contact</a></li>


            <?php if ($_SESSION == True): echo "<li style='float: right; margin-top: 12px;font-size: 1.1em;margin-right:16px;'>You're signed up as: " . $_SESSION["username"] . "</li>";
                echo "<li><a href='logout.php'>Logout</a></li>";
            else :
                echo '<li><a href="login.php">Login</a></li>';
                ?>
            <?php endif; ?>
        </ul>
    </nav>
    <main><br><br>
        <div align="center">
            <div>
                <main>
                    <h1>NEWS</h1>
                    <div class="news"><br><br>
                        <div>
                            <a href="news-1.php#java">
                                <img src="img/java.jpg" alt="Java" align="left"
                                     style="width:100px; margin-top:0.2em"></a>

                        </div>
                        <h1>Java module start</h1>
                        <p>Comprehensive Java programming course integrated with design principles, best practices & instructor-led Java EE project
						<a href="news-1.php#java">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#jquery">
                                <img src="img/jquery.jpg" alt="Jquery" align="left"
                                     style="width:100px; margin-top:0.2em"></a>

                        </div>
                        <h1>JQuery module start</h1>
                        <p>Use jQuery to create stunning animations, provide fast feedback forms, handle all user events and perform Ajax calls. 
						<a href="news-1.php#jquery">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#csharp">
                                <img src="img/csharp.jpg" alt="C#" align="left"
                                     style="width:100px; margin-top:0.2em"></a>

                        </div>
                        <h1>C# module start</h1>
                        <p>C# is a beautiful cross-platform language that can be used to build variety of applications.
						<a href="news-1.php#csharp">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#aspnet">
                                <img src="img/aspnetimg.jpg" alt="Asp.net" align="left"
                                     style="width:100px; margin-top:0.2em"></a>

                        </div>
                        <h1>Microsoft Asp.net module start</h1>
                        <p>Learn How to build Dynamic Web Sites using ASP .NET 4 from scratch
						<a href="news-1.php#aspnet">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#xml">
                                <img src="img/xmlimg.jpg" alt="Xml" align="left" style="width:100px; margin-top:0.2em"></a>

                        </div>
                        <h1>XML module start</h1>
                        <p>XML is a mark up language used to record data which is readable to both people and also a range of software applications.
						<a href="news-1.php#xml">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#mqsql">
                                <img src="img/mysqlimg.jpg" alt="Mysql" align="left"
                                     style="width:100px; margin-top:0.2em"></a>

                        </div>
                        <h1>MySql module start</h1>
                        <p>Become an In-demand SQL Master by creating complex databases and building reports through real-world projects
						<a href="news-1.php#mqsql">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#php">
                                <img src="img/phpimg2.jpg" alt="Php" align="left" style="width:100px; margin-top:0.2em"></a>

                        </div>
                        <h1>Php module start</h1>
                        <p>PHP for Beginners: learn everything you need to become a professional PHP developer with practical exercises & projects.
						<a href="news-1.php#php">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#js">
                                <img src="img/jsimg.jpg" alt="Javascript" align="left"
                                     style="width:100px; margin-top:0.2em"></a>
                        </div>
                        <h1>Javascript module start</h1>
                        <p>What You'll Learn in 
						Intro to Programming in JavaScript. <a href="news-1.php#js">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        <div>
                            <a href="news-1.php#css">
                                <img src="img/cssimg.jpg" alt="css" align="left" style="width:100px; margin-top:0.2em">
                            </a>
                        </div>
                        <h1>Css module start</h1>
                        <p>Without CSS, every web page would be drab plain text and images that flowed straight down the page. With CSS, you can add color and background images and change the layout of your page — your web pages can feel like works of art! 
						<a href="news-1.php#css">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>

                        <div>
                            <a href="news-1.php#html">
                                <img src="img/htmlimg.jpg" alt="html" align="left"
                                     style="width:100px; margin-top:0.2em"> </a>
                        </div>
                        <h1>Html module start</h1>
                        <p>
                        <p>HTML is the foundation of all web pages. Without HTML, you wouldn't be able to organize text or add images or videos to your web pages. HTML is the beginning of everything you need to know to create engaging web pages!
						<a href="news-1.php#html">More ...</a></p>
                        <p>
                            <time datetime="2017-10-25">25 October 2017</time>
                        </p>
                        <hr>
                        </p>
                    </div>
                   </main>
<div id="socialmenu"><br>              
			<p>  <div align="center">Social media:<br>
                    <a href="https://www.linkedin.com" target="_blank"><img src="img/linkedin.svg" alt="Linkedin" title="Linkedin" style="width:24px; margin-top:0.4em"></a>
                                                                            
                                                                            
                    <a href="https://www.twitter.com" target="_blank"><img src="img/twitter.svg" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
                                                                           
                                                                           
                    <a href="https://www.facebook.com" target="_blank"><img src="img/fb.jpg" alt="Facebook" title="Facebook" style="width:24px; margin-top:0.4em"></a>
                                                                            
                                                                            
                </p></div>
            </div><br><br>
 <div id="footer">
<footer>
         <p align="center">Copyright &copy; <?php echo date('Y');?> Antonijo Lelas <a href="https://github.com/antonijolelas"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github" style="width:20px; margin-top:-10px;"></a></a></p>
                                                                             
    </footer></div>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="js/jquery-1.11.3.min.js"></script>

                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.js"></script>
</body>
</html>

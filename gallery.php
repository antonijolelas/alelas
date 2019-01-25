<?php include('dbconnect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <!-- CSS -->
	<link rel="stylesheet" href="css/style1.css"">
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
<title>Gallery</title>
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
    <main>


        <br>
        <div align="center"><h1>Gallery</h1>
            <div>
                <div class="center"><p class="text" align="center"> This is our gallery <br> </p>
                   
                </div>
<br><br><br>

                <div class="row">
                    <div class="column">
                        <img src="img/htmlimg.jpg" alt="Html" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/cssimg.jpg" alt="Css" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/jsimg.jpg" alt="JavaScript" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/phpimg2.jpg" alt="Php" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/mysqlimg.jpg" alt="MySql" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/xmlimg.jpg" alt="Xml" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/aspnetimg.jpg" alt="Asp.net" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/csharp.jpg" alt="C#" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/jquery.jpg" alt="JQuery" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="img/java.jpg" alt="Java" style="width:75px; margin-top:0.4em"
                             onclick="myFunction(this);">
                    </div>
                </div>

                <div class="container">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                    <img id="expandedImg" style="width:100px; margin-top:0.2em">
                    <div id="imgtext"></div>
                </div>

                <script>
                    function myFunction(imgs) {
                        var expandImg = document.getElementById("expandedImg");
                        var imgText = document.getElementById("imgtext");
                        expandImg.src = imgs.src;
                        imgText.innerHTML = imgs.alt;
                        expandImg.parentElement.style.display = "block";
                    }
                </script>
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

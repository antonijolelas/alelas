<?php include('dbconnect.php') ?>
<!DOCTYPE html>
<html>
		<head>

		<!-- CSS -->
		
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap1.css">
		<link rel="stylesheet" href="css/style1.css">
		
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="some description">
<meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
<meta name="author" content="Antonijo Lelas">
		<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
        </style>
<title>News</title></head>
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap1.css" />  
          
      </head>  
      <body bgcolor=": #99ddff">
	  
	  <header>
	  		

	  </header>
	  <div class="container-fluid">
	  <img src="img/webdevelopment.jpg"  alt="Web development" class=".img-fluid. max-width: 100%; height: auto;">
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
			  
			  
			  
  
<?php if ($_SESSION == True): echo "<li style='float: right; margin-top: 12px;font-size: 1.1em;margin-right:16px;'>You're signed up as: ".$_SESSION["username"]."</li>";
				echo "<li><a href='logout.php'>Logout</a></li>";
	  else :
		  echo '<li><a href="login.php">Login</a></li>';
	   ?>	 
<?php endif; ?>			
			</ul>
		</nav>
	<main><br><br>
<div align="center">
	<div><h1>News</h1> <br><a name="html"></a><div class="gallery"><img src="img/htmlimg.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><br><p class="text2" align="left"> HTML is the foundation of all web pages. Without HTML, you wouldn't be able to organize text or add images or videos to your web pages.<br>In just 4 hours, learn the basics of HTML5 and start building & editing web pages.

<br> HTML is the beginning of everything you need to know to create engaging web pages!You will learn all the common HTML tags used to structure HTML pages, the skeleton of all websites. You will also be able to create HTML tables to present tabular data efficiently. </p><br><br>
  <a name="css"></a><div class="gallery"><img src="img/cssimg.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left">Without CSS, every web page would be drab plain text and images that flowed straight down the page. With CSS, you can add color and background images and change the layout of your page — your web pages can feel like works of art!
<br>Before starting CSS course you need to finish HTML course <br>In just 15 hours, learn the basics of CSS and customize your web pages. 
You will learn many aspects of styling web pages! You'll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you'll be able to customize the appearance of your web pages to suit your every need!  
 </p><br><br>
 <a name="js"></a><div class="gallery"><img src="img/jsimg.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left"> What You'll Learn in 
Intro to Programming in JavaScript<br>You need to know how to wrangle all of JavaScript’s quirks, not just how to copy-paste from Stack Overflow. Gain these foundational skills, build portfolio-ready projects, and launch your career in software engineering. 
While you’ll be able to move at your own speed, you should prepare for around 10 hours a week in order to stay on track.The concepts covered in these lessons lay the foundation for using JavaScript in any environment.</p><br><br><br>




<a name="php"></a> <div class="gallery"><img src="img/phpimg2.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left"> PHP for Beginners: learn everything you need to become a professional PHP developer with practical exercises & projects.
Knowing PHP will allow you to build web applications, websites or Content Management systems, like WordPress, Facebook, Twitter or even Google.

There is no limit to what you can do with this knowledge. PHP is one of the most important web programming languages to learn, and knowing it, will give you SUPER POWERS in the web development world and job market place.

Why?

Because Millions of websites and applications (the majority) use PHP. You can find a job anywhere or even work on your own, online and in places like freelancer or Odesk. You can definitely make a substantial income once you learn it.
</p><br><br><br>
  <a name="mqsql"></a><div class="gallery"><img src="img/mysqlimg.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left"> Become an In-demand SQL Master by creating complex databases and building reports through real-world projects.<br>
If you want to learn how to gain insights from data but are too intimidated by databases to know where to start, then this course is for you. This course is a gentle but comprehensive introduction to MySQL, one of the most highly in-demand skills in the business sector today.  
Whether you work in sales or marketing, you run your own company, or you want to build your own apps, mastering MySQL is crucial to answering complex business problems and questions using insights from data. The Ultimate MySQL Bootcamp introduces you to a solid foundation in databases in a way that’s both informative and engaging. Yes, that’s right, it’s possible to make an engaging course on databases.
</p><br><br>
 <a name="xml"></a><div class="gallery"><img src="img/xmlimg.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left">  XML is a mark up language used to record data which is readable to both people and also a range of software applications. XML is used extensively in the publishing world to fill layouts with content and enable people with no database development skills to build data structures with ease.
XML is a popular standard for exchanging data between applications and organisations.

This course will teach you the very basics of XML from the syntax to document structure.<br>
You should be familiar with HTML and basic CSS<br>
</p><br><br><br>
<a name="aspnet"></a><div class="gallery"><img src="img/aspnetimg.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left"> Learn How to build Dynamic Web Sites using ASP .NET 4 from scratch<br>
ASP . NET is a platform for building dynamic web sites that address a wide range of business needs.

This course provides developers with a thorough knowledge in developing dynamic web sites using ASP . NET.

In this course by development expert Kameswara Sarma Uppuluri, you'll learn essential concepts that you need to know to get started building web sites using ASP . NET

This course provides step-by-step walk-throughs and coding demos that you're encouraged to code along with to enhance the learning process.

This course is broken down into 26 modules with each module providing source code where applicable so that you can follow along with Kameswara Sarma Uppuluri.


</p><br><br>
 
<a name="csharp"></a> <div class="gallery"><img src="img/csharp.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left"> C# is a beautiful cross-platform language that can be used to build variety of applications. With C#, you can build mobile apps (for Windows, Android and iOS), games, web sites and desktop applications.<br>
Once you master fundamentals of C# and programming with .NET framework, you'll have lots of options in front of you. You can choose to build mobile apps if you prefer, or you can change job and work as a web developer. As long as you know the fundamentals well, switching to different technology stacks is pretty easy.<br>
ry section comes with a few bite-sized video lectures and a quiz or programming exercises. These exercises are carefully chosen from academic and real-world examples to train your "programming brain". If you want to be a successful programmer, who has many high-paid job offers and freedom to "choose", you need to learn how to think like a programmer. And this is what you're going to get out of these exercises. All exercises come with solutions, so you can compare your solutions with Mosh's to find areas for improvement.




</p>

<a name="jquery"></a><div class="gallery"><img src="img/jquery.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left"> Use jQuery to create stunning animations, provide fast feedback forms, handle all user events and perform Ajax calls.<br>
This course covers jQuery from start to end. You'll learn the ins and outs of developing professional dynamic websites using JavaScript & jQuery. Topics included in the course include:
Inside the course, you'll not only have life-long access to all the lectures but also to us. We'll be there to personally answer all your questions and help you get the most out of this course.
The ideal student for this course should have a basic understanding of HTML & CSS, though we'll briefly recap CSS selectors.<br> A basic understanding of JavaScript or another programming language is beneficial but not required, we'll briefly talk about JavaScript and other JavaScript frameworks before finally diving into jQuery.


 </p><br><br>
    <a name="java"></a><div class="gallery"><img src="img/java.jpg"  alt="html" style="width:100px; margin-top:0.2em"></div><p class="text2" align="left"> Comprehensive Java programming course integrated with design principles, best practices & instructor-led Java EE project.<br>
	This course begins by giving a birds-eye view of Java covering everything from origin of Java to installing Java and writing your first Java program. Even the most fundamental concepts like compilation & interpretation are explained. All other topics are covered in-depth starting from language basics, object-oriented concepts & design (including Java 8 features like default & static methods in interfaces), JVM, exceptions, IO, data structures, generics, multi-threading, databases, nested classes, enums, functional-style programming via Java 8 constructs like lambda expressions & streams, and also gives a very good basic introduction to Java EE technologies like Servlets, JSP, and JSTL.
	
	
	
	</p><br><br>

	
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

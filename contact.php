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
    <style>
        #map {
            height: 750px;
            width: 700px;
        }
    </style>
    <title>Contact</title></head>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <main><br>
        <div align="center"><h1>Contact</h1>
            <div>
                <div class="center"><br><br><p class="text" align="center"> Feel free to ontact us with all your questions about our classes </p>

                        <br><br><br>
                    <div style="float:right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.8292968674514!2d16.07171361556587!3d45.714461279104746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667e543ebb2c65%3A0xe159703d90972cf3!2sVeleu%C4%8Dili%C5%A1te+Velika+Gorica!5e0!3m2!1shr!2shr!4v1540571764728"
                                width="700" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div style="float:left">
                        <div id="contact">
                            <form name="contactform" method="post" action="send_form_email.php">


                                <div class="col-sm-4 text-justify">
                                    <div align="left">
                                        <div class="login-form">
                                            <tr>
                                                <td valign="top">
                                                    <span style="color:white"><label for="first_name">First Name *</span></label>
                                                </td>
                                                <td valign="top">
                                                    <input type="text" name="first_name" maxlength="50" size="30" placeholder="First name" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                <span style="color:white"><label
                                                            for="last_name">Last Name *</span></label>
                                                </td>
                                                <td valign="top">
                                                    <input type="text" name="last_name" maxlength="50" size="30" placeholder="Last name" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <span style="color:white"> <label
                                                                for="email">Email Address *</span></label>
                                                </td>
                                                <td valign="top">
                                                    <input type="email" name="email" maxlength="80" size="30" placeholder="Email" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                   <span style="color:white"><br><strong>Country *</strong><label for="countries"> </span><br><br>
												   <select class="custom-select d-block w-100" id="country" name="country_code" placeholder="Country" required>
                                    <option value="">Country</option>
                                    <?php
                                    $query = "SELECT * FROM countries ORDER BY id ASC";
                                    $result = mysqli_query($db, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row["country_code"]; ?>"><?php echo $row["country_name"]; ?></option>
                                        <?php
                                        }
                                    }
                                    ?>
                                </select></label>
                                                </td>
												
                                                <br><br>
                                            <tr>
                                                <td valign="top">
                                                    <span style="color:white"><label
                                                                for="telephone">Telephone Number *</span></label>
                                                </td>
                                                <td valign="top">
                                                    <input type="text" name="telephone" maxlength="30" size="30" placeholder="Telephone number" required>
                                                </td>
                                            </tr>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <span style="color:white"><label
                                                                for="comments">Comments *</span></label>
                                                </td>
                                                <td valign="top">
                                                    <textarea name="comments" maxlength="500" cols="25" rows="3"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align:center">
                                                    <br><br><input type="submit" value="Submit"></a>
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
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

<?php
require_once('dbconnect.php');

if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            array_push($_SESSION['shopping_cart'], $item_array);
            echo '<script>window.location="courses.php"</script>';
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="courses.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="courses.php"</script>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="some description">
<meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
<meta name="author" content="Antonijo Lelas">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap1.css"/>
	
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
            <?php if ($_SESSION == True): echo "<li style='float: right; margin-top: 12px;font-size: 1.1em;margin-right:16px;'>You're signed up as: " .$_SESSION["username"]."</li>";
                echo "<li><a href='logout.php'>Logout</a></li>";
            else :
                echo '<li><a href="login.php">Login</a></li>';
                ?>
            <?php endif; ?>
        </ul>
    </nav>

    <main>
        <div class="container" style="width:1000px;">
            <h3 align="center">Courses</h3><br/>
            <?php
            if (empty($_SESSION["username"])){
                echo '
                    <div class="alert alert-danger" role="alert">Only REGISTER users can place an orders! Login 
                        <a href="login.php" class="alert-link">here</a>
                    </div>
                     ';
                }

            $query = "SELECT * FROM tbl_product ORDER BY id ASC";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-4">
                        <form method="post" action="courses.php?action=add&id=<?php echo $row["id"]; ?>" >
                            <div style="border:1px solid #000; background-color:#fff; border-radius:5px; padding:16px;" align="center">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive"/><br/>
                                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>"/>
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
                                <?php if ($_SESSION == True): echo "<input type=\"text\" name=\"quantity\" class=\"form-control\" value=\"1\"/><input type=\"submit\" name=\"add_to_cart\" onclick=\"focusTable()\" style=\"margin-top:5px;\" class=\"btn btn-success\" value=\"Add to Cart\"/>";
                                else :
                                    echo "";
                                ?>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
            ?>

            <?php
                if (empty($_SESSION["shopping_cart"])){
                    $displayTable = "display:none";
                }else{
                    $displayTable = "display:block";
                }
            ?>
            <div style="<?=$displayTable?>">
                <div style="clear:both"></div>
                <br/>
                <h3>Order Details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th width="25%">Item Name</th>
                            <th width="10%">Quantity</th>
                            <th width="20%">Price</th>
                            <th width="15%">Total</th>
                            <th width="5%">Action</th>
                        </tr>
                        <?php
                        if (!empty($_SESSION["shopping_cart"])) {
                            $total = 0;
                            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                                ?>

                                <tr>
                                    <td><?php echo $values["item_name"]; ?></td>
                                    <td><?php echo $values["item_quantity"]; ?></td>
                                    <td> <?php echo $values["item_price"]; ?></td>
                                    <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                    <td>
                                        <button onclick="location.href = 'courses.php?action=delete&id=<?php echo $values["item_id"]; ?>';"
                                                class="submit-button btn btn-danger">Remove
                                        </button>
                                    </td>
                                </tr>
                                <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            }
                            ?>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                <td>
                                    <button onclick="location.href = 'summary.php';"
                                            class="submit-button btn btn-success">Summary
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
</div>

<div id="socialmenu"><br>              
			<p>  <div align="center">Social media:<br>
                    <a href="https://www.linkedin.com" target="_blank"><img src="img/linkedin.svg" alt="Linkedin" title="Linkedin" style="width:24px; margin-top:0.4em"></a>
                                                                            
                                                                            
                    <a href="https://www.twitter.com" target="_blank"><img src="img/twitter.svg" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
                                                                           
                                                                           
                    <a href="https://www.facebook.com" target="_blank"><img src="img/fb.jpg" alt="Facebook" title="Facebook" style="width:24px; margin-top:0.4em"></a>
                                                                            
                                                                            
                </p></div>
            </div><br><br>
 <div id="footer"><br>
<footer>
         <p align="center">Copyright &copy; <?php echo date('Y');?> Antonijo Lelas <a href="https://github.com/antonijolelas"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github" style="width:20px; margin-top:-10px;"></a></a></p>
                                                                             
    </footer></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>

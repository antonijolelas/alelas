<?php
require_once('dbconnect.php');
if (empty($_SESSION['username']) || empty($_SESSION['shopping_cart'])){

header('Refresh: 2; URL=index.php');
die("Restricted access!!");

}

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
                header('courses.php');

            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="some description">
<meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
<meta name="author" content="Antonijo Lelas">
	<link rel="stylesheet" href="css/bootstrap1.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

  
    <style>
        .container {
            max-width: 960px;
        }

        .border-top { border-top: 1px solid #e5e5e5; }
        .border-bottom { border-bottom: 1px solid #e5e5e5; }
        .border-top-gray { border-top-color: #adb5bd; }

        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

        .lh-condensed { line-height: 1.25; }
    </style>
</head>
<body class="bg-light">

<header>


</header>
<div class="container-fluid">
    <img src="img/webdevelopment.jpg" alt="Web development" class=".img-fluid. max-width: 100%; height: auto;"> </div>
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
    <?php
    if (empty($_SESSION["shopping_cart"])){
        $displayTable = "display:none";
    }else{
        $displayTable = "display:block";
    }
    ?>
    <div class="container" style="width:1000px;">
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
                                <td></td>
                            </tr>
                            <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <td align="right">$ <?php echo number_format($total, 2); ?></td>
                            <td>
                                <button onclick="openCloseForm()" class="submit-button btn btn-success">Check Out</button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
        </div>
        <br>
        <div id="checkOut" style="display: none;">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h4 class="mb-3">Billing address</h4>
                    <?php include('errors.php'); ?>
                    <form class="needs-validation" action="orders.php" method="post" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Joe" name="first_name" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Doe" name="last_name" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" value="<?php echo("{$_SESSION['username']}");?>" readonly>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" id="email" value="<?php echo("{$_SESSION['email']}");?>" readonly>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" name="address2">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" name="country_code" required>
                                    <option value="">Choose...</option>
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
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State <span class="text-muted">(Optional)</span></label>
                                <select class="custom-select d-block w-100" id="state" name="state_code">
                                    <option value="">Choose...</option>
                                    <?php
                                    $query = "SELECT * FROM us_states ORDER BY id ASC";
                                    $result = mysqli_query($db, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $row["state_code"]; ?>"><?php echo $row["state_name"]; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" name="zip_code" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="payment" name="cc_type" type="radio" class="custom-control-input" checked required readonly="readonly">
                                <label class="custom-control-label" for="payment">Chose type of card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="credit" name="cc_type" type="radio" class="custom-control-input" value="credit" required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="cc_type" type="radio" class="custom-control-input" value="debit" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <select class="custom-select d-block w-100" id="cc-name" name="cc_name" required>
                                    <option value="">Choose Credit Card</option>
                                    <?php
                                    $query = "SELECT * FROM tbl_cc_names ORDER BY id ASC";
                                    $result = mysqli_query($db, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $row["cc_name"]; ?>"><?php echo $row["cc_name"]; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="XXXX-XXXX-XXXX-XXXX" minlength="16" name="cc_number" required>
                                <div class="invalid-feedback">
                                    Credit card number is required (16 digits)
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <div class="input-append date" id="datepicker"
                                     data-date-format="mm-yy">
                                    <input class="form-control" id="cc-expiration" type="text" readonly="readonly" name="cc_exp_date" placeholder="mm/yy">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="XXX" minlength="3" name="cc_ccv" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-success btn-lg btn-block" type="submit" name="save_order">Process Payment</button>
                        <br>
                    </form>
                </div>
                <div class="col-md-2"></div>
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="https://unpkg.com/popper.js@1.14.6/dist/umd/popper.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')

function openCloseForm() {
        const x = document.getElementById("checkOut");
        const y= document.getElementById("checkOut");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.scrollIntoView();
        } else {
            x.style.display = "none";
        }
    }

    $("#datepicker").datepicker( {
        format: "mm/yy",
        startView: "months",
        minViewMode: "months"
    });

    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</html>
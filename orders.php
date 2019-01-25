<?php

$first_name = "";
$last_name = "";
$address = "";
$address2 = "";
$country_code = "";
$state_code = "";
$zip_code = "";
$cc_type = "";
$cc_name = "";
$cc_number = "";
$cc_exp_date = "";
$cc_ccv = "";
$errors = array();

require_once('dbconnect.php');

if (isset($_POST['save_order'])) {

    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $address2 = mysqli_real_escape_string($db, $_POST['address2']);
    $country_code = mysqli_real_escape_string($db, $_POST['country_code']);
    $state_code = mysqli_real_escape_string($db, $_POST['state_code']);
    $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);
    $cc_type = mysqli_real_escape_string($db, $_POST['cc_type']);
    $cc_name = mysqli_real_escape_string($db, $_POST['cc_name']);
    $cc_number = mysqli_real_escape_string($db, $_POST['cc_number']);
    $cc_exp_date = mysqli_real_escape_string($db, $_POST['cc_exp_date']);
    $cc_ccv = mysqli_real_escape_string($db, $_POST['cc_ccv']);

    if (empty($first_name)) {
        array_push($errors, "First name is required");
    }
    if (empty($last_name)) {
        array_push($errors, "Last name is required");
    }
    if (empty($country_code)) {
        array_push($errors, "Country code is required");
    }
    if (empty($address)) {
        array_push($errors, "Address is required");
    }
    if (empty($zip_code)) {
        array_push($errors, "Zip code is required");
    }
    if (empty($cc_type)) {
        array_push($errors, "Card type is required");
    }
    if (empty($cc_name)) {
        array_push($errors, "Card name is required");
    }
    if (empty($cc_number)) {
        array_push($errors, "Card name is required");
    }
    if (empty($cc_exp_date)) {
        array_push($errors, "Card expiration date is required");
    }
    if (empty($cc_ccv)) {
        array_push($errors, "Card ccv is required");
    }

    if (count($errors) == 0) {
        $cc_type = md5($cc_type);
        $cc_name = md5($cc_name);
        $cc_number = md5($cc_number);
        $cc_exp_date = md5($cc_exp_date);
        $cc_ccv = md5($cc_ccv);

        $query = "INSERT INTO tbl_orders (first_name, last_name, address, address2, country_code, state_code, 
                                          zip_code, cc_type, cc_name, cc_number, cc_exp_date, cc_ccv
                                          )
  			      VALUES('$first_name', '$last_name', '$address', '$address2', '$country_code', '$state_code',
                         '$zip_code', '$cc_type', '$cc_name', '$cc_number', '$cc_exp_date', '$cc_ccv')";

        mysqli_query($db, $query);

        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['address'] = $address;
        $_SESSION['address2'] = $address2;
        $_SESSION['country_code'] = $country_code;
        $_SESSION['state_code'] = $state_code;
        $_SESSION['zip_code'] = $zip_code;
        $_SESSION['success'] = "Your Order has been made!";

        header('location: summary.php');
    }

}

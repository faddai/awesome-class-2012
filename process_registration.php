<?php
include( "functions.php" );

$fullname = $_POST['fullname'];
$dob_day = $_POST['dob_day'];
$dob_month = $_POST['dob_month'];
$dob_year = $_POST['dob_year'];
$region = $_POST['region'];
$username = $_POST['username'];
$password = encrypt_password( $_POST['password'] );

$dob = "$dob_year-$dob_month-$dob_day";

$res = query("INSERT into members
             values(null, '$dob','$fullname',
             '$region', '$username', '$password')"
             );

if( $res ){
    echo "Thank you for you registering.";
} else{
    echo "Sorry, we couldn't insert your data.";
}








<?php
include( "includes/functions.php" );

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob_day = $_POST['dob_day'];
$dob_month = $_POST['dob_month'];
$dob_year = $_POST['dob_year'];
$interests = $_POST['interests'];
$bio = $_POST['bio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = encrypt_password( $_POST['password'] );
$pix = "trainees/$fname"; # use first name to grab photo from the trainees folder

$dob = "$dob_year-$dob_month-$dob_day";

$res = query("INSERT into members(fname,lname,gender,dob,interests,bio,email,phone,password,pix)
             values('$fname','$lname','$gender','$dob','$interests',
             '$bio', '$email', '$phone','$password','$pix')"
             );

if( $res ){
    echo "Thank you for you registering.";
} else{
    echo "Sorry, we couldn't insert your data.";
}








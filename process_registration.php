<?php
include( "includes/functions.php" );

// Clean up user input and prep it to be safe for the database
// escape all inputs with mysql_real_escape_string to make the data safe and avoid SQL injection

$fname = mysql_real_escape_string(trim($_POST['fname']));
$lname = mysql_real_escape_string(trim($_POST['lname']));
$gender = mysql_real_escape_string(trim($_POST['gender']));
$dob_day = mysql_real_escape_string(trim($_POST['dob_day']));
$dob_month = mysql_real_escape_string(trim($_POST['dob_month']));
$dob_year = mysql_real_escape_string(trim($_POST['dob_year']));
$interests = mysql_real_escape_string(trim($_POST['interests']));
$bio = mysql_real_escape_string(trim($_POST['bio']));
$email = mysql_real_escape_string(trim($_POST['email']));
$phone = mysql_real_escape_string(trim($_POST['phone']));
$password = encrypt_password( $_POST['password'] );
$pix = mysql_real_escape_string("trainees/". strtolower($fname). ".jpg"); # use first name to grab photo from the trainees folder. 

// concantenate year, month and day into MySQL accepted format i.e. YYYY-MM-DD
$dob = "$dob_year-$dob_month-$dob_day";
$sql = "INSERT into members(fname,lname,gender,dob,interests,bio,email,phone,password,pix)
             values('$fname','$lname','$gender','$dob','$interests',
             '$bio', '$email', '$phone','$password','$pix')";
             
             
$res = query($sql);

if( $res ){
    echo "Thank you for you registering.";
} else{
    echo "Sorry, we couldn't insert your data.";
}








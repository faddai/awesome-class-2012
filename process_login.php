<?php
include("includes/functions.php"); 

$email = mysql_real_escape_string(
            trim( $_POST['email'] ) );
$password = encrypt_password($_POST['password']);

// query database
// check if a match was found
// redirect members only page
$res = query("SELECT * from members where
             email='$email' AND
             password='$password' limit 1");

if( mysql_num_rows($res) === 1 ){
    $url = "http://localhost/exercise/members.php?cur_user=$username";
    header("Location: $url");
} else {
    echo "<h1>User does not exist</h1>";
}

             
             
             
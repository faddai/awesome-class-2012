<?php
include("includes/functions.php"); 
session_start();

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
    
    $data = array_shift( fetch($res) );
    
    foreach( $data as $k => $v ){
        $_SESSION[$k] = $v;
    }
    
    //echo "<pre>"; print_r($_SESSION); echo "</pre>"; die();    
    
    $url = base_url()."index.php#trainees";
    header("Location: $url");
} else {
    echo "<h1>User does not exist</h1>";
}

             
             
             
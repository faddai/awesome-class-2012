<?php

function connect($host, $user, $pass, $db){
    $conn = mysql_connect($host, $user, $pass) or die();
    
    if( $conn ){
        mysql_select_db($db, $conn) or
        die("<h1>Could not connect to the database</h1>");    
    }
}
function query($sql){
    $results = mysql_query($sql) or die(mysql_error());
    return $results;
}

// loop through results and grab data
function fetch($results){
    $tmp = array();
    if ($results){
        while($row = mysql_fetch_array($results)){
            $tmp[] = $row;
        }
    }
    return $tmp;
}

function encrypt_password($password){
    return sha1($password);
}

function base_url(){
    return "http://localhost/awesome-class-2012/";
}

connect("localhost", "root", "project", "awesome_class");
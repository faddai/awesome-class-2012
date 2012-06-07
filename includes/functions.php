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
        while($row = mysql_fetch_assoc($results)){
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

function get_kraa_name( $dob = NULL, $gender = NULL ){
    
    
    $names = array(
                'male' => array(
                              'sunday' => 'akwasi',
                              'monday' => 'kwadwo',
                              'tuesday' => 'kwabena',
                              'wednesday' => 'kwaku',
                              'thursday' => 'yaw',
                              'friday' => 'kofi',
                              'saturday' => 'kwame'
                              ),
               'female' => array(
                              'sunday' => 'akosua',
                              'monday' => 'adwoa',
                              'tuesday' => 'abena',
                              'wednesday' => 'akua',
                              'thursday' => 'yaa',
                              'friday' => 'afua',
                              'saturday' => 'ama'
                              )
            );
    if ( !is_null($dob) || !is_null($gender)){
        $kraa_name = "unknown";
        $dobTS = strtotime($dob);
        // the names array is all lowercase
        $day_of_birth = strtolower(date('l', $dobTS)); 
        $gender = strtolower($gender);
        
        foreach ($names[$gender] as $k => $v){
            
            if ($k == $day_of_birth){
                $kraa_name = ucfirst( $v );
                break;
            }
        }
    }
    return $kraa_name;
}


connect("localhost", "root", "project", "awesome_class");

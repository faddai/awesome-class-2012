<?php
include("includes/functions.php"); 
session_start();

$_SESSION = array();

$url = base_url(). "index.php";
     
header("Location:$url");
             
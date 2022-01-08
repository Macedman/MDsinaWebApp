<?php

if (session_status () == PHP_SESSION_NONE) {
    session_start();
}
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mdsina";

    //Create connection 
    $mysqli = new mysqli($servername, $username, $password, $database);

    //Check connection 
    if ($mysqli->connect_error) {
        die ("Connection failed" . $conn->connect_error);
    } 
    else {
        
    }
?>
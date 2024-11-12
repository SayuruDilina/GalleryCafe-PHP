<?php
$servername = "localhost";
$port = 4306; 
$userName = "dilina";
$password = "ZuJTfqVFQeW]Qc.6";
$database = "cafe5";


$conn = mysqli_connect($servername, $userName, $password, $database, $port);


 if(!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }
    
    else{
        echo'.';
    }
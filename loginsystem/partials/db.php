<?php
$servername = "localhost";
$user = "root";
$pass = "";
$database ="loginsystem";

$connect = new mysqli($servername, $user, $pass, $database);
if( !$connect )
{
    echo "Error".$connect->error;
}


?>
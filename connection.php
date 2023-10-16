<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "job";
$db_port = 3307;


// this is code if the website is posted online thankyouuuu!
// $db_server = "sql211.infinityfree.com";
// $db_user = "if0_35238494";
// $db_pass = "VIMJXAfjilH";
// $db_name = "if0_35238494_job"
// $db_port = "3306";

$conn=new mysqli($db_server, $db_user, $db_pass, $db_name, $db_port);
if(!$conn){
    die(mysqli_error($conn));
}
?>
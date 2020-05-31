<?php
$conn = new mysqli("localhost","root","","oxyshop");
if($conn-> connect_error){
    die("Connection Failed!".$conn->connect_error);
}
?>
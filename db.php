<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

echo "Connected successfully";

?>
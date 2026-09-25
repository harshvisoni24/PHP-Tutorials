<?php
echo "Connecting Database using php.";

//Ways to connect Mysql.
//1. MySQLi extension.
//2. PDO.

//Connecting to Database.
$servername = "localhost";
$username = "root";
$password = "";

//Create connection.
$conn = mysqli_connect($servrename,$username,$password);

//Die if not connected.
if(!$conn)
    die(("Sorry Not connected !!").mysqli_connect_error());
else
    echo "Connected Successfully";
?>

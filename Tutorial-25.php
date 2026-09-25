<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn)
    die(("Sorry not connected successfully ! ").mysqli_connect_error());
else
    echo "Connected Successfully";

echo "<br>";

//Create Database.
$sql = "CREATE DATABASE tut25";
$result = mysqli_query($conn, $sql);

if($result)
    echo "Databsae created successfully !";
else
    echo "Database not created because ".mysqli_error($conn);

?>

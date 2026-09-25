<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tut26";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
    die(("Not connected !").mysqli_connect_error());
else
    echo "Connected Successfully !";

echo "<br>";

$sql = "CREATE DATABASE tut26";
$result = mysqli_query($conn, $sql);
if($result)
    echo "Database created successfully";
else 
    echo "Database Not created beacuse ".mysqli_error($conn);

echo "<br>";

$sql = "CREATE TABLE `tut26`.`data` (`Id` INT(5) NOT NULL , `Name` INT(10) NOT NULL , `Age` INT(3) NOT NULL , `Gender` INT(7) NOT NULL , PRIMARY KEY (`Id`))";
$result = mysqli_query($conn, $sql);
if($result)
    echo "Table Created successfully !";
else
    echo "Table not created because ".mysqli_error($conn);

echo "<br>";
?>

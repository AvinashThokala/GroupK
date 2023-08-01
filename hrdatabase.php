<?php

$link = mysqli_connect("localhost", "root", "");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//creating database query execution
$sql = "CREATE DATABASE employees";
if(mysqli_query($link, $sql)){
    echo "DATABASE employees CREATED SUCCESSFULLY";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
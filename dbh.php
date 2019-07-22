<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if(!$conn){
    die("Coneection Failed :".mysqli_connect_error());
    
}

?>
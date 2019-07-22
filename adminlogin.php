<?php

session_start();

include 'dbh.php';

$auid = $_POST['auid'];
$apwd = $_POST['apwd'];

$sql = "SELECT * FROM admin WHERE auid = '$auid' AND apwd = '$apwd'";

$result = mysqli_query($conn, $sql);

if(!$row =mysqli_fetch_array($result)){
    echo "Your Username or Password is incorrect!";
}
else
{
    $_SESSION['id']=$row['auid'];
    header("Location: a.php");

}



?>
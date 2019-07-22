<?php
    session_start();

include 'dbh.php';

$luid = $_POST['luid'];
$lpwd = $_POST['lpwd'];

$sql = "SELECT * FROM lawyer WHERE luid = '$luid' AND lpwd = '$lpwd' ";

$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_array($result)){
    echo "Your Username or Password is incorrect!";
}
else
{
    $_SESSION['id']=$row['lid'];
    header("Location: retrieve.php");

 }



?>
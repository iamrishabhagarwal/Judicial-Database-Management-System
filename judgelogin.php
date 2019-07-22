<?php

session_start();

include 'dbh.php';

$juid = $_POST['juid'];
$jpwd = $_POST['jpwd'];

$sql = "SELECT * FROM judge WHERE juid = '$juid' AND jpwd = '$jpwd'";

$result =mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_array($result)){
    
    echo "Your Username or Password is incorrect!";
}
else
{
    $_SESSION['id']=$row['jid'];
    header("Location: j.php");


}


?>
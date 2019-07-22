<?php

session_start();

include 'dbh.php';
$judgeid = $_POST['judgeid'];

$sql = "delete from judge where jid = '$judgeid' ";

$result = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)==0){
    echo "Error in Deletion!!";
}
else
{
    echo "Deleted Successfully.";
}

if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
//header("Location: a.php");
?>
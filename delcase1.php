<?php

session_start();

include 'dbh.php';
$caseid = $_POST['caseid'];

$sql = "delete from cases where status='finished' and caseid='$caseid'";

$result = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)==0){
    echo "Error!! The case is not yet Finished";
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
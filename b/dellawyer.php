<?php

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Lawyer - JDBC</title>
</head>
<body>
<h2>Enter the Lawyer Id:</h2>
    <form action="dellawyer1.php" method="POST">
        
        <input type="text" name="lid" placeholder="Lawyer Id">
        <button type="submit">Proceed</button><br>
        <br>
        This Process will Set 'NULL' in all the cases where this Lawyer was fighting.
    </form>

    
    <?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
?>

</body>
</html>
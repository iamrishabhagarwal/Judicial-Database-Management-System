<?php

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Judge - JDBC</title>
</head>
<body>
<h2>Enter the Judge Id:</h2>
    <form action="deljudge1.php" method="POST">
        
        <input type="text" name="judgeid" placeholder="Judge Id">
        <button type="submit">Proceed</button><br>
        <br>
        This Process will Set 'NULL' in all the cases where this judge was presiding over.
    </form>

    
    <?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
?>

</body>
</html>
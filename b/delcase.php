<?php

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete 'Completed' Cases-JDBC</title>
</head>
<body>
<h2>Enter the Case Id:</h2>
    <form action="delcase1.php" method="POST">
        <input type="text" name="caseid" placeholder="Case Id">
        <button type="submit">Proceed</button><br>
        <br>
        It will check if the status of the entered case id is 'finished' or not.
    </form>

    
    <?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
?>

</body>
</html>
<?php

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UPDATE CASE DETAILS - JDBMS</title>
</head>
<body>
    <h3>Enter Details: </h3>
<form action = "update1.php" method="POST">
    <input type="text" name="caseid" placeholder="Case Id" required><br>
    <input type="text" name="status" placeholder="Status" required><br>
    <input type="date" name="next_date" placeholder="YYYY-MM-DD Next Date" required><br>

    <button type="submit">Submit</button>

    </form>

   <?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
?>

</body>
</html>
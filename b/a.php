<?php

session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome JDBMS Administrator</title>
</head>
<body>
    
    <h3>Insert a new Case with all Details:</h3>
    <form action="insertcase.php">
        <button type="submit">Proceed</button>    
    </form>
    
    <br><br>
    <h3>Retrieve Case Details: </h3>
        <form action="retrieve.php">
        <button type="submit">Proceed</button>    
    </form>
    
    <br><br>
    <h3>Update the information of a case: </h3>
    <form action="update.php">
        <button type="submit">Proceed</button>    
    </form>
    
    <br><br>
    <h3>Delete 'Completed' Cases: </h3>
    <form action="delcase.php">
        <button type="submit">Proceed</button>    
    </form>
    
    
    <br><br>
    <h3>Add a new Judge: </h3>
    <form action="addjudge.php">
        <button type="submit">Proceed</button>    
    </form>
    
    
    <br><br>
    <h3>Delete a Judge: </h3>
    <form action="deljudge.php">
        <button type="submit">Proceed</button>    
    </form>
    
    
    <br><br>
    <h3>Add a New Lawyer: </h3>
    <form action="addlawyer.php">
        <button type="submit">Proceed</button>    
    </form>
    
    
    <br><br>
    <h3>Delete a Lawyer: </h3>
    <form action="dellawyer.php">
        <button type="submit">Proceed</button>    
    </form><br><br>

     <?php
    if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
    }
?>
    
    
</body>
</html>
<?php

session_start();
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Case Details - JDBMS</title>
</head>
<body>

    <form action="insertcase1.php" method="POST">
        
        <input type="text" name="caseid" placeholder="Case Id" required>
    <br><br>
    
        <input type="text" name="judgeid" placeholder="Judge Id">
<br><br>
        Date Of Filing:
        <input type="date" name="filing_date" required>
<br><br>
        Next Date Of Hearing:
        <input type="date" name="next_date" required>
<br><br>
        <input type="text" name="chargeid" placeholder="Charge Id" required>
<br><br>
        <input type="text" name="courtid" placeholder="Court Id" required>
<br><br>
        <input type="text" name="status" placeholder="Status" required>
<br><br>
        <input type="text" name="plaintiff" placeholder="Plaintiff's Name" required>
<br><br>
        Plaintiff's DOB: 
        <input type="date" name="plaintiff_dob" required>
<br><br>
        <input type="text" name="prosecutorid" placeholder="Prosecutor Id">
<br><br>
        <input type="text" name="accused" placeholder="Accused's Name" required>
<br><br>
        Accused's DOB:
        <input type="date" name="accused_dob" required>
<br><br>
        <input type="text" name="defenceid" placeholder="Defence Id">
<br><br>        
        <button type="submit">SUBMIT</button>
<br><br>        
    </form>
 <?php
    if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
    }
?>

</body>
</html>
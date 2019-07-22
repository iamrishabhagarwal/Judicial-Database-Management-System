<?php 
  session_start();   
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add New Lawyer - JDBMS</title>
</head>
<body>
    <h2>Add a New Lawyer:</h2>
    <form action="addlawyer1.php" method="POST">
        <input type="text" name="lid" placeholder="Lawyer Id" required><br><br>
        <input type="text" name="name" placeholder="Lawyer's Name" required><br><br>
        Date Of Birth:
        <input type="date" name="dob" required><br><br>
        <input type="text" name="luid" placeholder="Username" required><br><br>
        <input type="text" name="lpwd" placeholder="Password" required><br><br>
        <button type="submit">Add Lawyer</button><br><br>
    </form>
<?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
?>

    
    
</body>
</html>
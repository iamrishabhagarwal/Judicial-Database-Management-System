<?php 
  session_start();   
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add New Judge - JDBMS</title>
</head>
<body>
    <h2>Add a New Judge:</h2>
    <form action="addjudge1.php" method="POST">
        <input type="text" name="jid" placeholder="Judge Id" required><br><br>
        <input type="text" name="name" placeholder="Judge's Name" required><br><br>
        <input type="text" name="courtid" placeholder="Court Id" required><br><br>
        Date Of Birth:
        <input type="date" name="dob" required><br><br>
        <input type="text" name="juid" placeholder="Username" required><br><br>
        <input type="text" name="jpwd" placeholder="Password" required><br><br>
        <button type="submit">Add Judge</button><br><br>
    </form>
<?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
?>

    
    
</body>
</html>
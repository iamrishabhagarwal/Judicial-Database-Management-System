<?php 
  session_start();   
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CASE DATA RETRIEVAL-JDBMS</title>
</head>
<body>
    <form action ="retrieve1.php" method="POST">
        <input type="text" name="caseid" placeholder="Case Id" required>
        <button type="submit">SUBMIT</button>
    </form>
    
<?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
?>

</body>
</html>
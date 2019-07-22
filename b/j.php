<?php 
  session_start();   

     if(isset($_SESSION['id'])){
        //echo $_SESSION['id'];
         $id=$_SESSION['id'];
         
     }
         include 'dbh.php';
         $sql = "SELECT name FROM judge WHERE jid='$id'";
         $result = $conn->query($sql);
         
         if($row = mysqli_fetch_array($result)){
             echo "<h2>";
             echo "Welcome Hon'ble ".$row['name'];
             echo "</h2>";    
    }
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome Your Honour-JDBMS</title>
</head>
<body>
    <h3>Retrieve the information of a case:</h3>
<form action = "retrieve.php">
    <button type="submit">Proceed</button>
    </form>
<br><br>
    <h3>Update the information of a case:</h3>
<form action = "update.php">
    <button type="submit">Proceed</button>
    </form>    

</body>
</html>
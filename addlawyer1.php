<?php

session_start();

include 'dbh.php';

$lid = $_POST['lid'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$luid = $_POST['luid'];
$lpwd = $_POST['lpwd'];

$sql = "insert into lawyer(lid, name, dob, luid, lpwd) values('$lid','$name','$dob','$luid','$lpwd')";

mysqli_query($conn, $sql);

$sql1 = 'CALL get_lawyer()';
$records = mysqli_query($conn, $sql1);
    

?>

<html>

    <head>
    
        <title>New Lawyer Details - JDBMS</title>
    
    </head>
    
    <body>
    
        <h3>New Lawyer Details: </h3>    
        
        <table width ="1000" border="1" cellpadding="1" cellspacing="1">
        
            <tr>
            
                <th>LAWYER ID</th>
                <th>LAWYER NAME</th>
                <th>DATE OF BIRTH</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                
            </tr>
        
        <?php
            
            while ($case = mysqli_fetch_array($records)){
                echo "<tr>";
                
                echo "<td>".$case['lid']."</td>";
                
                echo "<td>".$case['name']."</td>";
                
                echo "<td>".$case['dob']."</td>";
                
                echo "<td>".$case['luid']."</td>";
                
                echo "<td>".$case['lpwd']."</td>";
                
                echo "<tr>";
            }
        
            if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br><br><br>";
            }
        ?>
        </table>
    
    
    
    </body>
</html>
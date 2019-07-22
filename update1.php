<?php

session_start();

include 'dbh.php';

$caseid = $_POST['caseid'];
$next_date = $_POST['next_date'];
$status = $_POST['status'];

$sql="update cases set status = '$status', next_date = '$next_date' where caseid = '$caseid'";

mysqli_query($conn, $sql);

$sql1 = "select * from cases where caseid = '$caseid'";
$records = mysqli_query($conn, $sql1);
?>

<html>

    <head>
    
        <title>Updated Details - JDBMS</title>
    
    </head>
    
    <body>
        
        <h3>Updated Details of the Case:</h3>
        
        <table width ="1000" border="1" cellpadding="1" cellspacing="1">
        
            <tr>
            
                <th>CASE ID</th>
                <th>JUDGE NAME</th>
                <th>FILING DATE</th>
                <th>NEXT DATE</th>
                <th>CHARGE ID</th>
                <th>COURT ID</th>
                <th>STATUS</th>
    
            </tr>
        
        <?php
            
            while ($case=mysqli_fetch_array($records)){
                echo "<tr>";
                
                echo "<td>".$case['caseid']."</td>";
                
                echo "<td>".$case['judgeid']."</td>";
                
                echo "<td>".$case['filing_date']."</td>";
                
                echo "<td>".$case['next_date']."</td>";
                
                echo "<td>".$case['chargeid']."</td>";
                
                echo "<td>".$case['courtid']."</td>";
                
                echo "<td>".$case['status']."</td>";
                
               
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

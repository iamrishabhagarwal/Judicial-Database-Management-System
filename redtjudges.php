<?php

session_start();

include 'dbh.php';


$sql="select * from redt_judges";
    
$records=mysqli_query($conn, $sql);

?>

<html>

    <head>
    
        <title>Redt. Judges Details - JDBMS</title>
    
    </head>
    
    <body>
    
        <h3>Redt. Judges Details: </h3>    
        
        <table width ="600" border="1" cellpadding="1" cellspacing="1">
        
            <tr>
            
                <th>JUDGE ID</th>
                <th>JUDGE NAME</th>
                <th>COURT ID</th>
                <th>DOB</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                
            </tr>
        
        <?php
            
            while ($case=mysqli_fetch_array($records)){
                echo "<tr>";
                
                echo "<td>".$case['jid']."</td>";
                
                echo "<td>".$case['name']."</td>";
                
                echo "<td>".$case['courtid']."</td>";
                
                echo "<td>".$case['dob']."</td>";
                
                echo "<td>".$case['juid']."</td>";
                
                echo "<td>".$case['jpwd']."</td>";
                
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
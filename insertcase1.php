<?php

session_start();

include 'dbh.php';

$caseid = $_POST['caseid'];
$judgeid = $_POST['judgeid'];
$filing_date = $_POST['filing_date'];
$next_date = $_POST['next_date'];
$chargeid = $_POST['chargeid'];
$courtid = $_POST['courtid'];
$status = $_POST['status'];
$plaintiff = $_POST['plaintiff'];
$plaintiff_dob = $_POST['plaintiff_dob'];
$prosecutorid = $_POST['prosecutorid'];
$accused = $_POST['accused'];
$accused_dob = $_POST['accused_dob'];
$defenceid = $_POST['defenceid'];

$sql = "INSERT INTO cases (caseid, judgeid, filing_date, next_date, chargeid, courtid, status) VALUES ('$caseid','$judgeid','$filing_date','$next_date','$chargeid','$courtid','$status')";

mysqli_query($conn, $sql);

$sql1 = "INSERT INTO casedetails (caseid, plaintiff, plaintiff_dob, prosecutorid, accused, accused_dob, defenceid) VALUES('$caseid','$plaintiff','$plaintiff_dob','$prosecutorid','$accused','$accused_dob','$defenceid')";
    
mysqli_query($conn, $sql1);

$sql2="select cases.caseid, j.name, filing_date, next_date, c.category, charges.charge_details, cd.plaintiff, cd.prosecutorid, cd.accused, cd.defenceid, cd.plaintiff_dob, cd.accused_dob, cd.date_added
FROM cases, judge j, charges, court c, casedetails cd
WHERE cases.caseid = cd.caseid AND c.courtid = cases.courtid AND j.jid = cases.judgeid AND charges.chargeid = cases.chargeid AND cases.caseid = '$caseid'";
    
$records = mysqli_query($conn, $sql2);

?>

<html>

    <head>
    
        <title>New Case Details - JDBMS</title>
    
    </head>
    
    <body>
    
        <h3>Case Details: </h3>    
        
        <table width ="1250" border="1" cellpadding="1" cellspacing="1">
        
            <tr>
            
                <th>CASE ID</th>
                <th>JUDGE NAME</th>
                <th>FILING DATE</th>
                <th>NEXT DATE</th>
                <th>COURT CATEGORY</th>
                <th>CHARGE DETAILS</th>
                <th>PLAINTIFF</th>
                <th>PROSECUTOR ID</th>
                <th>ACCUSED</th>
                <th>DEFENCE ID</th>
                <th>PLAINTIFF'S DOB</th>
                <th>ACCUSED'S DOB</th>
                <th>DATE ADDED</th>
            </tr>
        
        <?php
            
            while ($case=mysqli_fetch_array($records)){
                echo "<tr>";
                
                echo "<td>".$case['caseid']."</td>";
                
                echo "<td>".$case['name']."</td>";
                
                echo "<td>".$case['filing_date']."</td>";
                
                echo "<td>".$case['next_date']."</td>";
                
                echo "<td>".$case['category']."</td>";
                
                echo "<td>".$case['charge_details']."</td>";
                
                echo "<td>".$case['plaintiff']."</td>";
                
                echo "<td>".$case['prosecutorid']."</td>";
                
                echo "<td>".$case['accused']."</td>";
                
                echo "<td>".$case['defenceid']."</td>";
                
                echo "<td>".$case['plaintiff_dob']."</td>";
                
                echo "<td>".$case['accused_dob']."</td>";
                
                echo "<td>".$case['date_added']."</td>";
                
                
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
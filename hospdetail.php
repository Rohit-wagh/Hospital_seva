<!DOCTYPE html>
<html>
<head>
<title>Appoinment Patient Data</title>
<style>
    h2{
        color:green;
        font-size:30px;
        text-align:center;
        
    }
</style>
</head>
<body>
    <h2>Patient Appoinment</h2>
</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hospital");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM appoinment";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1px black width='100%' height='auto' style='border:1px solid blue'>";
            echo "<tr>";
                echo "<th>Sr.No</th>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Mobile No</th>";
                echo "<th>Date</th>";
                echo "<th>Department</th>";
                echo "<th>Doctor</th>";
                echo "<th>Message</th>";
                echo "<th>Time</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] ."</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['department'] ."</td>";
                echo "<td>" . $row['doctor'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

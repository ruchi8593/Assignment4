<?php 
require('mysqli_oop_connect.php');

//sql query to select
$query = "select * from messages";
// run query using OOP
$results = $mysqli->query($query);

if ($results -> num_rows > 0) {
   
    while($row = $results->fetch_assoc()) {
        
        echo '<br><p>Username: ' . $row['username'].'</p>';
        echo '<p>Message: ' . $row['message'].'</p>';
    }
} else {
    echo "There is no user to show!";
}

?>
  
<?php 

require('mysqli_oop_connect.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    if(!empty($_POST['username']) && !empty($_POST['message'])){
        
        $query = "insert into messages (username, message) values (?, ?)";

        $prep_stmt = $mysqli->prepare($query);
        $prep_stmt->bind_param('ss', $username, $message);

        $username = $_POST['username'];
        $message = $_POST['message'];

        if ($prep_stmt->execute()) {
            echo "New username and message added successfully!";
        } else {
            echo "Please enter valid username and message";
        }
        $prep_stmt->close();
        $mysqli->close();
    }else {
        echo "<p style='color:red'>Please enter valid username and message</p>";
    }
}
?>
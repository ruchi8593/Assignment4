  
<?php 

require('mysqli_connect.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    if(!empty($_POST['username']) && !empty($_POST['message'])){
        
        $query = "insert into messages (username, message) values (?, ?)";

        $prep_stmt = $dbc->prepare($query);
        $prep_stmt->bind_param('ss', $username, $message);

        $username = $_POST['username'];
        $message = $_POST['message'];

        $prep_stmt->execute()
            echo "New username and message added successfully!";
        
        $prep_stmt->close();
        $dbc->close();
    }else {
        echo "Please enter valid username and message";
    }
}
?>
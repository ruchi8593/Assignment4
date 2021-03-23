<?php
include("vendingmachine.php");

$item = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 
if(isset($_POST['chocolate'])){
    $item = $_REQUEST['chocolate'];
}

elseif(isset($_POST['chips'])){
    $item = $_REQUEST['chips'];
}

elseif(isset($_POST['pop'])){
    $item = $_REQUEST['pop'];
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vending Machine</title>
</head>

<body>
<form action="index.php" method="POST">
        
        <h2>Vending Machine</h2>
        <h3>Choose item: </h3>
        <Button name="chocolate" value="Chocolate">Chocolate 1.25</button>
            <Button name="pop" value="Pop"> Pop 1.50</button>
            <Button name="chips" value="Chips">Chips 1.75</button><br>
        <br>
        
        <h3>Your selected item: <input type="text" id="item" name="item" value="<?php echo $item; ?> "></h3>
        

        <h3>Make payment:</h3>

        <button name='1dollar'>1$</button>
        <button name='5cents'>0.05$</button>
        <button name='10cents'>0.10$</button>
        <button name='25cents'>0.25$</button><br><br>
        <input type="submit" name="pay" id="pay" value="PAY">

</form>


</body>
</html>
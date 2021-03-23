
<?php
// take 2 variables and set it to 0 and take the product variable well
            $cash = $remaining = 0;
            $product = '';
            

            //Vending.php
            include 'Vending.php';


//Different prices are there and variable is set with isset
            if(isset($_POST['one']))
            {
                $cash = $_REQUEST['cash'] + 100;
            }
            if(isset($_POST['five']))
            {
                $cash = $_POST['cash'] + 5;
            }
            if(isset($_POST['ten']))
            {
                $cash = $_POST['cash'] + 10;
            }
            if(isset($_POST['twentyfive']))
            {
                $cash = $_POST['cash'] +25;
            }
            
            if(isset($_POST['cancel']))
            {
                header('Location: index.php');
            }


//cancel will reset the page because it is calling the index.php again
            if(isset($_POST['submit']))
            {
                
                //value is set to submit and choclate is already selected from the button
                if(!isset($_POST['snack']))
                    
                //the value which we got from radio button is selected here
                    echo "Please choose a product";
                else
                {
                    $cash = $_POST['cash'];
                    $product = $_POST['snack'];
                    
                    switch ($product) {
                        case "Chocolate":
                            if($cash < 125)
                                //if cash is less then the limit then print this message
                                echo "Please provide enough amount to buy the product";
                            else
                            {
                               $chocolate = new Vending('Chocolate', $cash, 125);//if the value provided is enough then product stores to buy
                               $chocolate->buy();    
                            }
                            break;
                        case "Pop":
                            if($cash < 150)
                                echo "Please provide enough amount to buy the Product";
                            else
                            {
                               $chocolate = new Vending('Pop', $cash, 150);
                               $chocolate->buy();
                            }
                            break;
                        case "Chips":
                            if($cash < 175)
                                echo "Please provide enough amount to buy the product";
                            else
                            {
                               $chocolate = new Vending('Chips', $cash, 175);
                               $chocolate->buy();
                            }
                            break;
                    }
                }
                
            }
                
?>

<html>

<head>
<!---- add bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Vending Machine</title>
</head>

<body> 
    <h1>Vending Machine</h1>
    <div class="form">
        <form action='' method='post'>
            Money in cents: <input type="text" name="cash" id='cash' value="<?php echo $cash;?>" onclick="err();" />
            <br>
            
            Choose Item:<br>
            <!-- the product which is clicked value got add to product variable-->
            <Button name="chocolate" class="btn btn-success" value="Chocolate">Chocolate 1.25</button>
            <Button name="pop" class="btn btn-success" value="Pop"> Pop 1.50</button>
            <Button name="chips" class="btn btn-success" value="Chips">Chips 1.75</button><br>
            <br>
            
            <!-- different price buttons-->
            Make Payment:<br>
            <button name='one' class="btn btn-info">1 dollar</button>
            <button name='five' class="btn btn-info">5 Cents</button>
            <button name='ten' class="btn btn-info">10 Cens</button>
            <button name='twentyfive' class="btn btn-info">25 Cents</button><br><br>
           
            <input type="submit" name="submit" class="btn btn-primary">
            <button name='cancel' class="btn btn-danger">Cancel</button><br><br>
        

        </form>
    </div>
    <script>
        //error msg when money is not selected
        function err() {
            alert("Please, Use the buttons to insert the money");
        }

    </script>


</body>

</html>

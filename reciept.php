<!DOCTYPE html>
<html lang="en">

<?php

//Tell PHP to log errors
ini_set('log_errors', 'On');
//Tell PHP to not display errors
ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

include '_dbConnect.php';
// Start the session
session_start();

$oid = $ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$uid = $_SESSION["uid"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];


$name = $_POST["name"];
$phone = $_POST["phone"];
$_SESSION["EMAILL"] = $email = $_POST["email"];
$_SESSION["add"] = $address = $_POST["address"];
$_SESSION["allItems"] = $products = $_POST["products"];
$_SESSION["total"] = $grand_total = $TXN_AMOUNT;

?>

<?php

$sqll = "select * from cart where uid='$uid'";
        $resultt = mysqli_query($conn, $sqll);

    while($roww = mysqli_fetch_assoc($resultt))
    {
        $pid = $roww['pid'];
        $pprice = $roww['product_price'];
        $qty = $roww['qty'];
        $sqlll = "INSERT INTO `checkoutProducts` (`product_price`,`qty`,`uid`,`date`,`pid`,`oid`) VALUES ('$pprice','$qty','$uid',current_timestamp(),'$pid','$oid')";
        $resulttt = mysqli_query($conn, $sqlll);
    }

    $sqlll = "DELETE FROM `cart` WHERE `uid`='$uid'";
    $resulttt = mysqli_query($conn,$sqlll);

    if($grand_total) 
    {
        $sqllll = "INSERT INTO `orderhistory` (`name`,`email`,`phone`,`address`,`products`,`amount_paid`,`date`,`oid`,`uid`) VALUES ('$name','$email','$phone','$address','$products','$grand_total',current_timestamp(),'$oid','$uid')";
        $resultttt = mysqli_query($conn,$sqllll); 
        
    }

    
	$sqlll = "DELETE FROM `cart` WHERE `uid`='$uid'";
	$resulttt = mysqli_query($conn,$sqlll);  

    $date = date("m.d.y");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Reciept</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="assests/css/style.css">

    <style>
        h1 {
            text-align: center;
            font-size: 4rem;
            font-family: 'Birthstone', cursive;
            color: rgb(85, 150, 162);
            text-shadow: 1.5px 1.5px #5e521e;
            margin-top: 1%;
        }

        .content {
            padding: 10px;
            align-content: center;
        }

        th,
        td {
            padding: 15px;
            font-size: 1.5rem;
        }

        .content a {
            font-size: 1.2rem;
            margin-top: 40px;
            text-align: center;
        }
        button{
            font-size: 1rem;
            padding: .5%;
            background-color: rgb(85, 150, 162);
            border-radius: 8px;
            border: none;
            margin-top: 10px;
        }
        button:hover{
            background-color: rgb(152, 205, 214);
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Payment Reciept</h1>
        <table id="reciept" style="border: none; text-align: left; margin:auto; mb-3">
            <ul>
                <tr>
                    <th>Order ID:</th>
                    <td><?= $ORDER_ID ?></td>
                </tr>
                <tr>
                    <th>User ID:</th>
                    <td><?= $CUST_ID ?> </td>
                </tr>
                <tr>
                    <th>Products:</th>
                    <td><?= $products ?></td>
                </tr>
                <tr>
                    <th>Total Amount Paid:</th>
                    <td><?= '$'.$TXN_AMOUNT ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?= $email ?> </td>
                </tr>
                <tr>
                    <th>Contact Details:</th>
                    <td><?= $phone ?></td>
                </tr>
                <tr>
                    <th>Shipping Address:</th>
                    <td><?= $address ?> </td>
                </tr>
                <tr>
                    <th>Date:</th>
                    <td><?= $date ?> </td>
                </tr>
            </ul>
        </table>
        <a href="index.php#">Thanks for Shopping with us! Click here to shop more.</a>
        <div>
            <button class="mx-auto" onClick="window.print()">Print Reciept</button>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

</body>

</html>
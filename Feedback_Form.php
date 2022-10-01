<?php

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

//Tell PHP to log errors
ini_set('log_errors', 'On');
//Tell PHP to not display errors
ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

include '_dbConnect.php';

// Start the session
session_start();


	$grand_total = 0;
	$allItems = '';
	$items = [];

    $uid = $_SESSION['uid'];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);
                    
	while ($row = mysqli_fetch_assoc($result)) {
        
        $grand_total += $row['total_price'];
	    $items[] = $row['ItemQty'];
	}
	$allItems = implode( "<br>" , $items);

    $oid = mt_rand(1111,9999);
    $_SESSION['oid'] = $oid;

?>


<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Feedback Form</title>
		<link rel="Feedback stylesheet" href="css/FStyle.css">	
		<meta name="viewport" content="width=device-width, initial-scale=1,0">
		
		<script>
		function msg(){
		alert("THANKS FOR YOUR VALUABLE FEEDBACK!");
		}
		</script>
		
		
		
	</head>
	<body>
		<div class="container">
			<div class="title">Feedback Form</div>
			<form action="#">		
				<div class="user-details">
					<div class="input-box">
						<span class="details">Name:</span>
						<input type="text" value="<?= $_SESSION['uname']?>" required>
					</div>
					<div class="input-box">
						<span class="details">Email:</span>
						<input type="text" value="<?= $_SESSION['email']?>" required>
					</div>
					<div class="input-box">
						<span class="details">Subject:</span>
						<input type="text" placeholder="Enter subject" required>
					</div>
					<div class="input-box">
						<span class="details">Message:</span>
						<textarea cols="50" rows="10" style="overflow-y: scroll; overflow-x:hidden; resize:none;" required></textarea>
					</div>
				<div class="button">
					<input type="submit" value="Submit" onclick="msg()">
				</div>
			</form>
			</div>
		</div>
	</body>
</html>
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

$uid = $_SESSION['uid'];

$sql = "SELECT * FROM `orderhistory` WHERE `uid`='$uid'";
$result = mysqli_query($conn, $sql);
$rowww = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM `users` WHERE `uid`='$uid'";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result2);

?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>User page</title>
  <link rel="User page stylesheet" href="User_Style.css">  
<style>

.title
{
  font-size:30px;
  font-weight:bold;
  background-size: auto auto;
  background-size: 200% auto;
  color: white !important;
  .feedform{
    margin: auto !important; 
    color: rgb(85,150,162)
  }
}


</style>

  </head>
<body >

 <br><br>
 
  <div class="container">
    <center><div class="title" style="color:black;">USER DETAILS<br></div> </center>
	
	<div class="details">
	<table style="padding-left:10px; border-radius:8px;">
  <tr>
    <th >Name</th>
    <td><?= $_SESSION['uname']?></td>
    
  </tr>
  <tr>
    <th>Email</th>
    <td><?php echo $row['email']; ?></td>
    
  </tr>
  <tr>
    <th>Address</th>
    <td><?php echo $row['address']; ?></td>
    
  </tr>
 
</table>
</div>
    
     <!--------------------- Order_history 주문내역 박스 ------------------------> 
      <div class="Order_history">
        
        <br><br>
        <table class="Order_details_table" style="	box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);">
          <div class="container">
    <center><div class="title" style="color:black;">ORDER DETAILS<br></div> </center>

          <colgroup>
            <col width="16%">
            <col width="14%">
            <col width="68">
            <col>
            <col width="16%">
            <col width="13%">
           
          </colgroup>
          <tbody>
            <tr>
              <th scope="col">Order number</th>
              <th colspan="2">Title</th>
              <th scope="col">Price</th>
              <th scope="col">Order date</th>
              <th scope="col">Email</th>
            </tr>
              
            <tr style="text-align:center;">
                <td ><?php echo $rowww["oid"]; ?></td>
                <td colspan="2" style="text-align:center;"><?php echo $rowww["products"]; ?></td>
                <td style="text-align:center;"><?php echo $rowww["amount_paid"]; ?></td>
                <td style="text-align:center;"><?php echo $rowww["date"]; ?></td>
                <td style="text-align:center;"><?php echo $rowww["email"]; ?></td>
            </tr>

           
          </tbody>
        </table>
      </div>
      <!----------------- MY wishlist 나의 관심도서 박스 ---------------
      <div class="wishlist">
        <p style="font-size: 22px;"><img src="images/color_bookmark.png" alt="" width="20" height='20'><img>My wishlist books</p>
        <div class="mytabs" style="	box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);">
          <input type="radio" id="Wishlist01" name="mytabs" checked="checked">
          <label for="Wishlist01">Wishlist</label>
          <div class="tab">
            <div class="wrap">
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>  
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>  
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>  
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>   
            
            </div>  
          </div>

          <input type="radio" id="Viewed Products" name="mytabs">
          <label for="Viewed Products">Viewed Products</label>
          <div class="tab">
            <div class="wrap">
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>  
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>  
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>  
              <div><center><img class="membershipImg" src="images/plant.jpg" alt=""><P> a plant consultation cente</P></center></img></div>   
            </div>   
          </div>
        </div>
      </div>-->
	  
    </div>
  </div>
</body>
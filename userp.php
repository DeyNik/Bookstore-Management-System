<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>User Profile</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
   

	    <link rel="stylesheet" href="css/style.css">
	  
</head>
<body>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="C:\Users\Nirmal Dev\Desktop\mummu\sem3\wdd\hmpgtry.html" title="Back to tutorial page">Back to Homepage</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>USER PROFILE</h1>
                
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <h3>USER</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Customer ID:</strong>321000001</p>
			
            <p class="mb-0"><strong class="pr-1"><a href="#cart">Cart Details        </strong></a></p>
            <p class="mb-0"><strong class="pr-1"><a href="#receipt">Recent Purchases  </strong></a></p>
			
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3><br>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td>125</td>
              </tr>
              <tr>
                <th width="30%">Email	</th>
                <td width="2%">:</td>
                <td>2020</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
			  <tr>
                <th width="30%">Shipment Address</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
             
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>For any grieveinces, you can fill our feedback form <a href="Feedback_Form.php">here</a>  and we will reach out to you soon!.</p>
			  </div>
        </div>
		
		
		<!--------------------- Order_history 주문내역 박스 ------------------------> 
      <div class="Order_history">
        
        <br><br>
        <table class="Order_details_table" style="	box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);">
          <div class="container">
    <div class="title">Order Details<br></div> 

          <colgroup>
            <col width="16%">
            <col width="14%">
            <col width="68">
            <col>
            <col width="6%">
            <col width="13%">
            <col width="15%">
          </colgroup>
          <tbody>
            <tr>
              <th scope="col">Order number</th>
              <th scope="col">Book</th>
              <th colspan="2">Title</th>
              <th scope="col">Price</th>
              <th scope="col">Order date</th>
              <th scope="col">Email</th>
            </tr>
              
            <tr style="text-align:center;">
                <td ><?php echo $rowww["oid"]; ?></td>
                <td><img class="membershipImg" src="images/book5.jpg" alt=""></img></td>
                <td colspan="2" style="text-align:center;"><?php echo $rowww["products"]; ?></td>
                <td style="text-align:center;"><?php echo $rowww["amount_paid"]; ?></td>
                <td style="text-align:center;"><?php echo $rowww["date"]; ?></td>
                <td style="text-align:center;"><?php echo $rowww["email"]; ?></td>
            </tr>

           
          </tbody>
        </table>
      </div><br><br>

      </div>
    </div>
  </div>
</div>


	</body>
</html>
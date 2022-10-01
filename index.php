 <?php
//Tell PHP to log errors
ini_set('log_errors', 'On');
//Tell PHP to not display errors
ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

// Start the session
session_start();

include '_dbConnect.php';

?>

<!doctype html>
<html lang="en">

<head>

<script>
 var Quotes=["If you can't fly, run. If you can't run, walk.<br> If you can't walk, crawl, but by all means, keep moving. ",
 "Self-care is how you take your power back.<br> -Lalah Delia" ,
 "Happiness can be found even in the darkest of times, <br>if one only remembers to turn on the light.",
 "You don't have to control your thoughts.<br> You just have to stop letting them control you." 
 ,"Let your story go. Allow yourself to be<br> present with who you are right now."];
 var curIndex = 0;

	setInterval(function testimony() {
		document.getElementById('quote').innerHTML = Quotes[curIndex];
        curIndex++;
        if (curIndex == Quotes.length) { curIndex = 0; }		
    },2000);
</script>
<style>


.seller , .serv, .subj, .release , .auth, .top
{
  margin-bottom: 3rem;
  font-size:30px;
  font-weight:bold;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  
  .feedform{
    margin: auto !important; 
    color: rgb(85,150,162)
  }
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

.img1 , .img2 , .img3 ,.img4, .img5 , .img6{
	
	display:inline-block;
	margin:12px 12px 12px 12px;
	width:20%;
	height:280px;
	filter: brightness(100%);
	border-radius:8px;
	box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 12px 0 rgba(0, 0, 0, 0.19);
	
}

</style>
<!-- links for other hmg elements-->
<link  href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
<link  href="https://fonts.googleapis.com/css?family=Nanum Brush Script" rel="stylesheet">
<link  href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">


<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/homepg.css">
<link rel="stylesheet" href="css/search.css"/>
<link rel="stylesheet" href="css/slide.css">
<link rel="stylesheet" href="css/services.css">
<link rel="stylesheet" href="css/story.css">
<link rel="stylesheet" href="css/try_pro.css" />
<script src="js/services.js"></script>
<script src="js/slide.js"></script>
<script src="js/author.js"></script>
<script src="js/toggle.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- end of links for other hmg elements-->




    <!-- Tab Icon -->
    <link rel="icon" href="assests/images/logo.png" type="image/icon type">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


    <!-- css files -->
    <link rel="stylesheet" href="assests/css/review.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/Product.css">
    <link rel="stylesheet" href="assests/css/contact.css">

    <title>BOOK STORE</title>

</head>

<body onload="currentSlide(1)"  >


    <!-- header section starts ******************************************************************************************* -->
    <header id="topheader">

        
        <?php include 'header.php'; ?>
        

        <!-- *****************************************************************************************************************************
****************************************************************************************************************************** -->
        <?php

if($_SESSION["signup"])
{
  $_SESSION["signup"] = false;
    echo '<div class="alert text-center alert-success alert-dismissible fade show mb-0" role="alert" style="z-index:1000;">
  <strong>Account created successfully !</strong> Welcome to BookSTore.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(!$_SESSION["signup"] && $_SESSION["signupAlert"])
{
  $_SESSION["signupAlert"] = false;
    echo '<div class="alert text-center alert-danger alert-dismissible fade show mb-0" role="alert" style="z-index:1000">
   <strong>Error!</strong> Email is invalid or already taken.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
}
if($_SESSION["login"])
{
  $_SESSION["login"] = false;
  echo '<div class="alert text-center alert-success alert-dismissible fade show mb-0" role="alert" style="z-index:1000;">
  <strong>Hello, '. $_SESSION["uname"] . '! </strong> Enjoy shopping with BookStore.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(!$_SESSION["login"] && $_SESSION["loginAlert"])
{
  $_SESSION["loginAlert"] = false;
  echo '<div class="alert text-center alert-danger alert-dismissible fade show mb-0" role="alert" style="z-index:1000">
  <strong>Error!</strong> Incorrect email address or password.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($_SESSION["forgot"])
{
  $_SESSION["forgot"] = false;
  echo '<div class="alert text-center alert-danger alert-dismissible fade show mb-0" role="alert" style="z-index:1000">
  <strong>Error!</strong> Incorrect email address.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($_SESSION["reset"])
{
  $_SESSION["reset"] = false;
  echo '<div class="alert text-center alert-success alert-dismissible fade show mb-0" role="alert" style="z-index:1000;">
  <strong>Hello, '. $_SESSION["uname"] . '! </strong> Password changed successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($_SESSION["AddWishlistAlert"])
{
  $_SESSION["AddWishlistAlert"] = false;
  echo '<div class="alert text-center alert-warning alert-dismissible fade show mb-0" role="alert" style="z-index:1000">
  Please login to add items in your wishlist!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($_SESSION["ViewWishlistAlert"])
{
  $_SESSION["ViewWishlistAlert"] = false;
  echo '<div class="alert text-center alert-warning alert-dismissible fade show mb-0" role="alert" style="z-index:1000">
  Please login to view items in your wishlist!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if($_SESSION["ViewCartAlert"])
{
  $_SESSION["ViewCartAlert"] = false;
  echo '<div class="alert text-center alert-warning alert-dismissible fade show mb-0" role="alert" style="z-index:1000">
  Please login to view items in your Cart!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>
        <!-- *****************************************************************************************************************************
****************************************************************************************************************************** -->


<!--	 ?php include 'lng.php'; ?-->


    <!-- DIV FOR MESSAGE IF ITEM SUCCESSFULLY ADDED TO CART -->
        <div id="cart-message"></div>

    </header>
    <!-- header section ends -->
	
	
	
<div class="first part" style="background:url(picture/bg1.png); background-size:cover; margin-left:-10px; margin-right:-10px;">
<!--image-->
<div class="cont2">
<br><br>
<div class="himg">
	<img src="picture/bgif.gif" ></img>
</div>
<div class="info" >
<h1 class="heading" >Your <label class="online" style="color:#ff3333;">Online</label> Bookshop</h1>
<p  class="quote" id="quote" style="top:3700px;">

Explore our range of books of well known authors <br>right from the comfort of your homes. 

</p>
</div>


<!-- search bar-->
<div class="search" >
<form action="search.php" method="POST" onclick="search()">
            <input style="margin-left:1rem; width:26.3rem;" type="search" class="sbar" id = "searchBar" name="search" placeholder="search by category...">
            <button style="margin-left:-.3rem;" type="submit" class="button button2" >
	<i class="fa fa-search"></i>
		</button>
        </form>
</div>


</div>
	<br><br>
	<br><br>
	<br><br>
	

	
	

</div>
 
<!--end of search bar-->

	
	
<!--our services-->
<div class="ser" id="services">
<div class="articles" style="background:url(picture/bg2.png); background-size:cover; margin-left:-10px; margin-right:-10px; margin-top:-30px;" >

<br><br><br>
<br><br><br>
<!--<hr width=50% style="border: 1px solid gold; background-color:gold; opacity:0.5;" >-->
<br>
<h1 class="serv">OUR SERVICES</h1>
 <!--button1-->
 <div class="serimg">
 <img id="img1" class="img1" src="picture/deli_w.png" alt="" onmouseenter="changei1()" onmouseleave="seti1()" />
 
	
	
<!--button2-->
 <img id="img2" class="img2" src="picture/user_w.png" alt="" onmouseenter="changei2()" onmouseleave="seti2()" />

	
 <!--button3-->
 <img id="img3" class="img3" src="picture/qual_w.png" alt="" onmouseenter="changei3()" onmouseleave="seti3()" />
</div>
	</div>
	</div>
<!--end of our servifile:///C:/Users/Nirmal%20Dev/Desktop/mummu/sem3/wdd/hmpgtry.html#aboutusces-->

<!--our story-->
<br><br><br>
<div class="str">
<div class="story" style="font-size:20px;">
<br>
<video class="asan" autoplay muted loop><source src="picture/white_team.mp4" type="video/mp4"></video>

<div class="txt">
<div id="txtt">
<h1 >OUR STORY</h1>
<p class="ques" id="a1">
<!--
"우리는 지식의 힘을 믿습니다. 그래서 우리의 목표는 그것을 공급하는 사람들을 돕고 그것을 갈망하는 사람들과 나누는 것입니다. 이것이 바로 우리가 취하는 모든 <br> 조치와 귀하의 모든 책 구매가 자금 조달에 도움이 되는 이유입니다.우리는 고객에게 매우 가치 있는 경험을 제공하고, <br>고객이 자신의 행동을 자신의 가치에 맞추고 각 개인을 존중하고,성취에 대해 보상하고, 팀 성공을 축하할 수 있는 경험을 제공하기 위해 노력하고 있습니다.";
-->
We believe in the power of knowledge. So our goal is to help those who supply it <br>
and share it with those who crave it.Which is why every action we take, and <br>
every book purchase you make helps fund it. We are driven to provide customers with <br>
a highly-valued experience, and one that allows them to align their actions with <br>
their values and respect each individual, reward achievement, and celebrate team success.
 </p></div> 
 <div class="btn1" style="margin-top:-35px;">
	<br><a href="AboutUs/aboutus.html"><button type="button" class="bt" >Learn More</button></a>
	
    <br><a href="#aboutus"><button type="button" class="bt" id="btn"  onclick="ab1()"  style="top:-0.9rem; left:-1rem;" >Korean</button></a>
 </div>

</div>

</div>
</div>
<
	
	
	
	
	
	
	
	
<!-- topcategory section starts *********************************************************************************************************-->
        <br><br>
		<br>
		<br>
		<section id="topcategory" class="py-5" style="background:url(picture/wh_str.png); margin-left:-10px; margin-right:-10px;">
            <center><h1 class="top" >TOP CATEGORIES</h1></center>
            <div class="container" style="color:#c9b040">
                <div class="product-items">

                    <?php 
        
          $sql = "select * from search where top='yes'"; 
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result);
        
          foreach ($result as $row) {
            echo
          '
          <div class="product-img">
		  <div class="image">
              <a href="category.php?category='.ucwords($row["sname"]).'"><img src="'.$row["photo"].'"
                    alt="categry image"></a>
              <div class="text-center py-3 category" id="tag" style="top:5rem; font-size:20px; text-shadow:none; color:#1a5276">'.ucwords($row["sname"]).'</div>
			  </div>
          </div>'; }
          ?>
                </div>
            </div>
        </section>
        <!-- topcategory section ends -->
		
<!--carousel-->
<div class="caro" id="new">
<br>
<br>

<div class="cara" style="background:url(picture/gr_str2.png); margin-top:-60px; margin-left:-10px; margin-right:-10px;">

<br><br>
<br><br>
<br><br>
<p class="release"  style="font-weight:bold; font-size:30px;">NEW ARRIVALS</P>
    <div id="wrapper">
      <div id="carousel">
        <div id="content">
		<a href="">
          <img
            class="item"
            src="picture/b1.png"
			style="width: 270px; height: 270px;"
          /></a>
		  <a href="">
          <img
            src="picture/b2.png"
            class="item"
			style="width: 270px; height: 270px;"
          /></a>
		  <a href="">
          <img
            src="picture/b7.png"
            class="item"
			style="width: 270px; height: 270px;"
          /></a>
		  <a href="">
          <img
            src="picture/b4.png"
            class="item"
			style="width: 270px; height: 270px;"
          /></a>
		  <a href="">
          <img
            src="picture/b5.png"
            class="item"
			style="width: 270px; height: 270px;"
          /></a>
		  <a href="">
          <img
            src="picture/b6.png"
            class="item"
			style="width: 300px; height: 300px;"
          /></a>
		
         
         
        </div>
      </div>
      <button id="prev">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
        </svg>
      </button>
      <button id="next">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path fill="none" d="M0 0h24v24H0V0z" />
          <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
        </svg>
      </button>
    </div>
	</div>
	</div>
<!--end carousel-->
   <!-- featured section starts ***************************************************************************************************-->
        <br><br>
        <br><br>
		<section id="featured" class="py-5">
            <h1 class="top" style="text-align:center; ">FEATURED PRODUCTS</h1>
            <div class="container">
                <div class="product-items">

                    <?php
        
          $sql = "SELECT * FROM `products` WHERE `nf`='featured'"; 
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result);
        
          foreach ($result as $row) {
                    echo
                    '<div class="product">
                        <div class="product-content">
                            <div class="product-img">
                                <a href="Product.php?pid='.$row["pid"].'" class="text-dark"><img src=" '.$row["photo"].' " alt="product image"></a>    
                            </div>
                            <div class="product-btns " style="align-items: center;">';

                                $discount = $row["pprice"] - (($row["pprice"]*$row["offer"])/100);
                                $discount = intval($discount);

                                echo '<form action="" class="form-submit">
                                
                                    <input type="hidden" class="form-control pqty" value="1">
                                    <input type="hidden" class="pid" value=" '.$row["pid"].' ">
                                    <input type="hidden" class="pname" value=" '.$row["pname"].' ">
                                    <input type="hidden" class="pprice" value=" '.$discount.' ">
                                    <input type="hidden" class="pimage" value=" '.$row["photo"].' ">
                                    <a href="cart.php?uid= '.$uid.' "><button class="btn-cart addtomycart"><span><i class="fas fa-shopping-cart"></i></span></button></a>
                                </form>


                                <button type="button" class="btn-wishlist" style="float:left;>
                                <span><a href="AddWishlist.php?pid='.$row["pid"].'" class="text-dark"><i class="fas fa-heart"></i></a></span>
                                </button>
                                <button type="button" class="btn-wishlist" style="float:left;>
                                    <span><a href="Product.php?pid='.$row["pid"].'" class="text-dark"><i
                                                class="fas fa-eye"></i></a></span>
                                </button>

</div>
                            </div>
                        

                        <div class="product-info">
                            <div class="product-info-top">
                                <h2 class="sm-title">Rating</h2>
                                <div class="rating">';

                                for($i=0; $i<$row["rating"]; $i++) {
                                    echo '<span><i class="fas fa-star"></i></span>'; }

                                    for($i=0; $i<5-$row["rating"]; $i++) {
                                    echo '<span><i class="far fa-star"></i></span>';  }

                                echo '</div>
                            </div>
                            <center><a class="product-name" style="float:left;"> '.$row["pname"].' </a></center> <br>';
                           
                            if($row["offer"])
                            {
                                $discount = $row["pprice"] - (($row["pprice"]*$row["offer"])/100);
                                $discount = intval($discount);
                                echo'
                            <p class="product-price-strike"> $ '. number_format($row["pprice"]) .'/-</p>
                            <p class="product-price"> $ '. number_format($discount) .'/-</p>';

                            }
                            else
                            {
                                echo '<p class="product-price"> $ '. number_format($row["pprice"]) .'/-</p>';
                            }
                        echo
                        '</div>';
                        
                        if($row["offer"]) { echo'
                        <div class="off-info">
                            <h2 class="sm-title">25% off</h2>
                        </div>'; }
                        echo
                    '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- featured section ends -->
		
		
<!-- author section starts *********************************************************************************************************-->
       
		<section id="topcategory" class="py-5" >
            <center><h1 class="top" >AUTHORS</h1></center>
            <div class="container" style="color:#c9b040">
                <div class="product-items">

                    <?php 
        
          $sql = "select * from author where top='yes'"; 
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result);
        
          foreach ($result as $row) {
            echo
          '
              <div class="product-img">
			  <div class="image1">
                <a href="category2.php?tag='.ucwords($row["sname"]).'"><img src="'.$row["photo"].'"
                    alt="categry image"></a>
                <div class="text-center py-3 category" id="tag" style=" font-size:20px; text-shadow:none; color:#1a5276">'.ucwords($row["sname"]).'</div>
            </div>    
          </div>'; }
          ?>
                </div>
            </div>
        </section>
        <!-- author section ends -->	


<!--slideshow   -->
<div class="cont5" id="reviews">
<div class="slidebg" style="width:100%;  background:url(picture/bg2_slides_str.png);  background-size:cover;  margin-left:3px;  " >
<div class="slideshow-container" style="top:100px; align:center; background:url(picture/bg_slides.png);" >

  <!-- Full-width images with number and caption text -->
<div class="mySlides"  >
   
    <center><img src="picture/slide3.png" style="width:70%; "></center>
    <div class="text">“Wanna refrain from those never ending bookstore's queues? Congratulations!! <br>
	You've just found the perfect place.. I'm so impressed by their fresh range of books! 
	<br>They are so up to date! "</div>
  </div>

  <div class="mySlides">

    <center><img src="picture/slide4.png" style="width:70%"></center>
    <div class="text">제가 얻고자하는 정보가 한눈에 알아볼수 있게 잘 나와있어서 웹 사이트를 <br>이용하는데 어려움이 없었어요! 다른 사람들한테도 추천하고 싶네요!!</div>
  </div>

  <div class="mySlides">

    <center><img src="picture/slide1.png" style="width:70%"></center>
    <div class="text">"My life saver!! I remember how I freaked out when I lost my book just a week before my exam <br>
	and couldn't find it anywhere until I landed here..and would you believe that? <br>
	It was just delivered within a day! Great team, THANK YOU!! "</div>
  </div>
  
  <div class="mySlides">

    <center><img src="picture/slide2.png" style="width:70%"></center>
    <div class="text">김작가님의 책이 출판된다는 소식을 듣고 얼마나 기다렸는지 몰라요.<br> 이 곳에서 예약판매를 시작한다고 안내를 들은 순간 바로 주문했습니다.
	책은 정말 단단하게 포장되어 잘 도착했어요. <br>손상된 곳이 전혀 없네요! 안전하고 빠른 배송 감사해요!! 잘 읽을게요^^*</div>
  </div>

  <!-- Next and previous buttons -->
 <div >
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
</div>

<!--
 The dots/circles
<div style="text-align:center; margin-top:10px;" >
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
-->
</div>
</div>
<!--end of slideshow-->


  <!-- footer section ********************************************************************************************************************-->
        <?php include 'footer.php'; ?>
    </main>

    <script src="assests/js/review.js"></script>
    <script src="assests/js/main.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


    <script type="text/javascript">
      $(document).ready(function() {

        // Send product details in the server
        $(".addtomycart").click(function(e) {
          e.preventDefault();
          var $form = $(this).closest(".form-submit");
          var pid = $form.find(".pid").val();
          var pname = $form.find(".pname").val();
          var pprice = $form.find(".pprice").val();
          var pimage = $form.find(".pimage").val();

          var pqty = $form.find(".pqty").val();

          $.ajax({
            url: 'action.php',
            method: 'post',
            data: {
              pid: pid,
              pname: pname,
              pprice: pprice,
              pqty: pqty,
              pimage: pimage,
              
            },
            success: function(response) {
              $("#cart-message").html(response);
              window.scrollTo(0, 0);
              load_cart_item_number();
            }
          });
        });

        // Load total no.of items added in the cart and display in the navbar
        load_cart_item_number();

        function load_cart_item_number() {
          $.ajax({
            url: 'action.php',
            method: 'get',
            data: {
              cartItem: "cart_item"
            },
            success: function(response) {
              $("#cart-item").html(response);
            }
          });
        }
      });
    </script>
	
	
	
	
	
    <script src="js/try_pro.js"></script>

</body>

</html>
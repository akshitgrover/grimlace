<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/menu_jquery.js"></script> 
</head>
<body>
<?php
	if(isset($_POST["order"]))
	{	
		session_start();
		$_SESSION["order"]="pic39";
		header("location:orderform.html");
	}
	?>
	<div class="header">	
      <div class="container"> 
  	     <div class="logo">
			<h1><a href="index.html">The Quinn</a></h1>
		 </div>
		 <div class="top_right">
		   <ul>
			<li><a href="index.html">Home</a></li>|
			<li><a href="shoes.php">Shoes</a></li>|
			<li><a href="watches.html">Watches</a></li>
		   </ul>
	     </div>
		 <div class="clearfix"></div>
		</div>
	</div>
	<div class="single">
		<div class="container">
		   <div class="single_box1">
			 <div class="col-sm-5 single_left">
				<img src="images/pic39.jpg" class="img-responsive" alt=""/>
				<br><p class="text-center"><strong>Nike Inneva <br>(Black)</strong></p>
			 </div>
			 <div class="col-sm-7 col_6">
					<h4><b>Description</b></h5>
					<p>A lightweight weave and slim laces connect for a glovelike fit in a flexible, lightweight sneaker designed for natural movement.. 

<br><br><b>Features & details</b><br>
<br>* Synthetic-And-Leather
<br>* Rubber sole
<br>* Strategically placed carbon rubber pods in the sole
<br>* Waffle outsole flex grooves to deliver superior traction and cushioning</p>
				<form method="post"><input type="submit" class="btn_3" value="order" name="order"></form>
				<p class="movie_option"><strong>Our Price: ₹ </strong>3,600</p>
			</div>
			<div class="clearfix"> </div>
		  </div>
		  
			<div class="tags">
	    	<h4 class="tag_head">Similar Products</h4>
	         <ul class="tags_images">
				<li><a href="pic38.php"><img src="images/pic38.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic37.php"><img src="images/pic37.jpeg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic40.php"><img src="images/pic40.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic41.php"><img src="images/pic41.jpg" class="img-responsive" alt=""/></a></li>
				<div class="clearfix"> </div>
			 </ul>
			</div>
	    </div>
	</div>
	
	<div class="grid_3">
	  <div class="container">
         <div class="container"><div class="col-md-2"><img src="images/delivery.png" ></div><div class="col-md-10"><ul id="footer-links">
			<li><a href="faq.html">FAQs</a></li>
			<li><a href="contact.html">Contact Us</a></li>
         </ul>
         <p>Copyright © 2016 The Quinn. All Rights Reserved.Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a><br><br>Developed By: Akshit Grover & Akash Sharma</p></div>
	  </div>
	  </div>
	</div>
</body>
</html>		
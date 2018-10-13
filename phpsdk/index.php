<!DOCTYPE HTML>
<html>
<head>
<title>Donation</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
       <script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });

});


</script>
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="logo">
			<h1><a href="index.html">Donate</a></h1>
		</div>	
<!-- start header menu -->
			<div class="header-top">
				<div class="head-nav">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.html">Home </a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>

				<div class="clearfix"> </div>
				
			</div>
		<div class="clearfix"> </div>
	</div>
<!-- header -->
<!-- about -->
<div class="about">
	<div class="container">
		<div class="abou-top">
			<div class="clearfix"> </div>
		</div>

	</div>
</div>

<!-- about -->
<div class="team">
	<div class="container">
		<div class="col-md-4 deffence-rgt">
			<div class="deffence-left">
				<img src="images/investor.jpg" class="img-responsive" alt="" border="0" />
					<a href="#">
						<h4>Download PDF</h4>
					</a>
			</div>
		</div>
		<div class="col-md-8 deffence-rgt">
						<div class="donate">
				<h1>Donate Cloud Coins get a free book!</h1>
				
				<div class="clearfix"> </div>
				<div>
					<form action="accept_donation.php" id="donateform" name="donateform" method="post" enctype="multipart/form-data">

									
					<div class="form-group">
									
						<label for="email">Enter Account Id:</label>

						<input type="text" placeholder="Enter Account Id" class="form-control" name="accountid" id="accountid"  required="required">
					</div>
					<div class="form-group">
							<input type="hidden" name="filestack" id="filestack">
					</div>

					<div class="clearfix"> </div>

					<div class="form-group">
						
					    <label for="email">Enter Private Key:</label>
					  
									
					   	<input type="text" placeholder="Enter Private Key" class="form-control" name="privatekey" id="privatekey"  required="required">
					</div>
					<div class="clearfix"> </div>


					<div class="form-group">
									
					    <label for="email">Enter Cloud Coins Amount:</label>
									
					    	<input type="number" step="0.1" placeholder="Enter Cloud Coin Amount" class="form-control" name="amount" id="amount"  required="required">
					</div>
									
					<div class="form-group">
									
						    <label for="email">Upload Cloud Coins Stack File:</label>
									
						    <div class="btn btn-primary btn-sm float-left">
											<span>&nbsp;</span>
									 			<input type="file" name="stackfile" id="stackfile" required="required">
							</div>
									
					</div>
	

									
									
									<div class="clearfix"> </div>
									<div class="card">
										<div class="button-9">
										
											<input type="submit" value="Donate" name="submit">
										
										</div>
									</div>

								</form>
							</div>


			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- deffence -->
<!-- about -->
<div class="about">
	<div class="container">
		<div class="abou-top">
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<!-- about -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h3>Telephone</h3>
			<p>1 800 603 6035</p>
		</div>
		<div class="col-md-3 footer-left">
			<h3>E-Mail Us</h3>
			<p>Email : <a href="mailto:info@example.com">info@mycompany.com</a></p>
		</div>
		<div class="col-md-3 footer-left">
			<h3>Follow Us</h3>
			<ul>
				<li><a href="#"><i class="facebok"> </i></a></li>
				<li><a href="#"><i class="twiter"> </i></a></li>
				<li><a href="#"><i class="goog"> </i></a></li>
				<li><a href="#"><i class="inst"> </i></a></li>
					<div class="clearfix"></div>	
			</ul>
		</div>
		<div class="col-md-3 footer-left">
			<h3>Address</h3>
			<p>8058 St Perth Place,
Australia, DC 55 Fr 88.</p>
		</div>
			<div class="clearfix"></div>
			<div class="foot-bottom">
				<p>Copyrights © 2015 Hope. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
	</div>
</div>
<!-- footer -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
</body>
</html>
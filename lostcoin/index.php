<?php
include_once('header.php');
?>
<body>
<!-- header -->
	<div class="header">
		<div class="logo">
			<h1><a href="index.html">LOSTCOIN</a></h1>
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

		<div class="col-md-12 deffence-rgt">
						<div class="donate">
				<h1>CloudCoin - Lost Coin Query</h1>
				<h2>Don't worry, unlike with Bitcoin if there is an issue with lost coins, if you can supply the serial information you should be able to get it back within 2 years. </h2>
				
				<div class="clearfix"> </div>
				<div>
					<form action="lostcoin.php" id="donateform" name="donateform" method="post" enctype="multipart/form-data">

					<div class="form-group">
									
						<label for="email">Enter Email:</label>

						<input type="text" placeholder="Enter Email Id" class="form-control" name="email" id="email"  required="required">
					</div>
					<div class="form-group">
									
						<label for="email">Month of Transaction (Which month did this transaction happen in?):</label>

						<input type="text" placeholder="Select Date" class="form-control" name="datepicker" id="datepicker"  required="required">
					</div>				

					<div class="form-group">
					  <label for="serialnumber">Enter CloudCoin Serial Numbers:</label>
					  <textarea class="form-control" placeholder="Please list any and all serial numbers of lost coins. Please be sure to separate them with commas." rows="5" name="serialno" id="serialno"  required="required"></textarea>
					</div>

					<div class="form-group">
									
						<label for="email">Enter Help us understand:</label>

						<input type="text" placeholder="Please list in detail what happened for you to submit this lost coin report." class="form-control" name="help" id="help"  required="required">
					</div>


					<div class="form-group">
						<label for="email">Send me a copy of my responses:</label>
						<div class="radio">
						  <label><input type="radio" name="copy" id="copy" value="1" checked>Yes</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="copy" id="copy" value="0">No</label>
						</div>
					</div>				
									
									<div class="clearfix"> </div>
									<div class="card">
										<div class="button-9">
										
											<input type="submit" value="Submit" name="submit">
										
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
<?php
include_once('footer.php');
?>
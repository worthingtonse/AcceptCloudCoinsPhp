<?php
include_once('header.php');

//data sanitization

$email=addslashes($_REQUEST['email']);
$datepicker=addslashes($_REQUEST['datepicker']);
$serialno=addslashes($_REQUEST['serialno']);
$help=addslashes($_REQUEST['help']);
$copy=addslashes($_REQUEST['copy']);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "INSERT INTO lostcoinquery (email, lostdate, serialno,help,copy,created)
VALUES ('$email','$datepicker','$serialno','$help','$copy',now())";

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
				<h1>

<?php
if ($conn->query($sql) === TRUE) {
    echo "Your Lost Coin Query Submitted Successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

				</h1>
				
				
				<div class="clearfix"> </div>



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
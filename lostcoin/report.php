<?php
include_once('header.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "select * from lostcoinquery";

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
				
 <h1>CloudCoin - Lost Coin Report</h1>



	<?php
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

	?>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Lost Date</th>
        <th>Serial No.</th>
        <th>Help</th>
        <th>Copy</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
	<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    	<tr>
	        <td><?php echo $row["id"]?></td>
	        <td><?php echo $row["email"]?></td>
	        <td><?php echo $row["lostdate"]?></td>
	        <td><?php echo $row["serialno"]?></td>
	        <td><?php echo $row["help"]?></td>
	        <td><?php 
	        		if($row["copy"])
	        			echo 'Yes';
	        		else
	        			echo  'No';
	        	?></td>
	        <td><?php echo $row["created"]?></td>
      	</tr>
    	<?php
    }
    ?>
        </tbody>
  </table>
    <?php
} else {
    echo "<h1>No Record Found.</h1>";
}
$conn->close();



?>

	
				
				
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
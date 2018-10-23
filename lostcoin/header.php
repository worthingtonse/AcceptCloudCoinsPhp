<!DOCTYPE HTML>
<html>
<head>
<title>LOST COIN</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.validate.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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
//calender........................................................
$( function() {
     	var date = new Date();
    	var currentMonth = date.getMonth();
    	var currentDate = date.getDate();
    	var currentYear = date.getFullYear();

    	$('#datepicker').datepicker({
        	minDate: new Date(currentYear, currentMonth, currentDate),
        	dateFormat: 'yy-mm-dd'
    	});
  } );
  </script>

</head>
<?php
//database server details
	$databaseservername="localhost";
	$databaseusername="root";
	$databasepassword="root1234";
	$databasename="lostcoin";

// Create connection
$conn = new mysqli($databaseservername, $databaseusername, $databasepassword, $databasename);
?>
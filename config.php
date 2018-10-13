<?php 
//sending email 
$emailserver="protonmail.com";
$receiptemail="Receipt@page.com";
$emailSend = "cloudcoinbanker@protonmail.com"; //email of sender
$emailPath="C:/Users/(name)/Documents/PHPEMAIL";//folder that contains automatic email sender
$Esubject="CloudCoin Purchase!";//subject for emails to be sent
$epass = "bmVGcTJxX1NRWHVlREk3NEd5RW9KQQ==";//password to smtp in base64
$ememo = "CC";

//
$bankserver="bank.cloudcoin.global";
$server = $_SERVER['SERVER_NAME'];
$pfile = "GA093D45FA3430E9762E59EA7913BA3P";	//folder that contains passwords
$configAccount = "account";	// account Id Primary of seller
$privateKey = "00000000000000000000000000000000";	//Primary seller bank Private Key
$configPK = "?pk=00000000000000000000000000000000&account=".$configAccount; //seller bank url extension

//default greenpay information
$id=000000;		//greenpay id
$pass=00000000; // password for greenpay
//remaining greenpay information


	//purchasing information
	$price=0.03;//default price

	
	
	
	//number of coins in each package
	$basicAmount = 2;
	$basicAmount = 2;
	$silverAmount = 4;
	$goldAmount = 8;
	$platinumAmount = 20;
	$titaniumAmount = 40;
	$titaniumPlusAmount = 80;

	//price of coins in each package
	$basic=0.01;
	$silver=0.09;
	$gold=0.08;
	$platinum=0.07;
	$titanium=0.06;
	$titaniumPlus=0.05;
	
	$basicDisplay='$0.10';
	$silverDisplay='$0.09';
	$goldDisplay='$0.08';
	$platinumDisplay='$0.07';
	$titaniumDisplay='$0.06';
	$titaniumPlusDisplay='$0.05';
?>
<?php
	//print_r($_REQUEST);
	//print_r($_FILES);
	//$account=$_POST['accountid'];
	//$privateKey=$_POST['privatekey'];
	
?>

<?php
$filecontent=file_get_contents($_FILES['stackfile']['tmp_name']);
//$filecontent='';
//echo $postdata = 'account=cloudcoins.com&pk=easypassword&amount_to_deposite=137&amount_sent=250&amount=5&stack='.$filecontent;

echo "request:<br/><br/><br/>";
echo $postdata = 'account=cloudcoins.com&amount=5&pk=easypassword&stack='.$filecontent;

$result = depositOneStackWithChange("https://bank2.cloudcoin.global/deposit_one_stack_with_change",$postdata);


echo "<br/><br/><br/><br/>server response:";
echo "<pre>";
print_r($result);
exit;


//download link

if(isset($result['receipt']) && $result['receipt']!='')
{
	echo 'Your Receipt No :'.$result['receipt'];
	echo '<br/>';
	echo 'PDF Download Link';
}
else
{
	echo 'Something Went Wrong, Please try again later...';
}






//function to call curl 

function depositOneStackWithChange($url,$postdata){
	$ua = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
	curl_close ($ch);
	return $server_output;
}
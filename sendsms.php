<?php
session_start();
if(isset($_GET['submit'])){

	$no=$_GET['snum'];
	$spnum=$_GET['spnum'];	
	
          
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=mfo3GrvxY1iusCLcH8PRngqyZX6wQUKF4k9a7DTjIJd0lbOpMVXbItnJvLSymqTp1sFV49HuzMh8l0Be&sender_id=TXTIND&message=".urlencode('DEAR USER ,THIS IS FROM COVID-19 180 DEGREE  '.$_GET['uname'].' have request for Service Contact '.$_GET['uname'].' on'.$no.' for more information.')."&route=v3&numbers=".urlencode($spnum),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  header("location:index.php");
}
}?>
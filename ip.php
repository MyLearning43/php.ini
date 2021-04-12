<?php
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$date = date("Y-m-d H:i:s");

echo "<h1>".$ip_address."</h1>";
echo "<h1>".$hostname."</h1>";
echo "<h1>".$date." (UTC)</h1>";

?>
<?php
$access_token = '2iYPvcG9e5Oo2DaK4yEBlohIhZiWZVUsQRHPtmRCNI/+tK2lWgrO0suu2vzANMxdLqa8pr6o4dlPSCCPi/phHqLD/fETeJIHVjmGQZY1/o6NA8onblSRNt4FiE3gbi26uZ/byEcbJawVshnhJ1A40wdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

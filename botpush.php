<?php



require "vendor/autoload.php";

$access_token = '2iYPvcG9e5Oo2DaK4yEBlohIhZiWZVUsQRHPtmRCNI/+tK2lWgrO0suu2vzANMxdLqa8pr6o4dlPSCCPi/phHqLD/fETeJIHVjmGQZY1/o6NA8onblSRNt4FiE3gbi26uZ/byEcbJawVshnhJ1A40wdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








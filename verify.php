<?php
$access_token = 'rJHE9UvM/q1dt71JBbTMTwFqpX4z94DYdWNofcAsskb/xDHa4DAq90Ty7CGPeVyOWCILPAmhUOY4buExHWmrdqxle6M1KAH0shuUVdx1hjEpSR7aaemmDW3UiCPAN5xCeh4Hi+2OyQ0L009lqn5hygdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

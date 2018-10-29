<?php
$access_token = 'adPuEVK1ceK3T+vhY/n8rQHCav+hySTEhsJEr7bpBH6MQn7HV+M0ge8BNG6BasJOLw1Jh5Qv8py4OkNtiM4QRDCxFiWbJ37BzwNAm2InSMVSVC+eSRLzeqr5LxvEtnEl0VJkb2pgok5aHeQXO6Db4gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

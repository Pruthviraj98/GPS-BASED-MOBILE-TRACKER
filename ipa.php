<?php
session_start();
$request_uri = 'https://ipfind.co';
$ip_address = "8.8.8.8"; // $_SESSION['ip'];
$url = $request_uri . "?ip=" . $ip_address;
$document = file_get_contents($url);
$result = json_decode($document);
echo $result->latitude, " ,", $result->longitude;
?>

<?php
require('src/OAuth2/client.php');
require('src/OAuth2/GrantType/IGrantType.php');
require('src/OAuth2/GrantType/AuthorizationCode.php');

/* Datos de acceso */
$clientId = '40db101f7f2693aabb';
$clientSecret = '06de9951575cc0101eb6e3335a';
$client = new OAuth2\Client($clientId, $clientSecret);

$code = '123456abcdef';
$redirectUrl = "http://localhost/nationbuilder/";
 
$token = "6e10997a783dc423172e848ef6c85aa37f28e627c2950db72dc95982a70ed0c7";
$client->setAccessToken($token);


$baseApiUrl = 'https://barrickrd.nationbuilder.com';
$client->setAccessToken($token);
$response = $client->fetch($baseApiUrl . '/api/v1/people');

echo "<pre>";
print_r($response);
echo "</pre>";
?>

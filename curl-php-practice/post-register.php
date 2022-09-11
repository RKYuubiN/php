<?php

$url = 'http://localhost/curl-php-practice/server.php';

$registerData = [
    'email'=>'boundedbyblack@gmail.com',
    'password'=>'boundedbyblack'
];

$curl = curl_init($url);

curl_setopt_array($curl,[
    CURLOPT_POST=>true,
    CURLOPT_POSTFIELDS=>$registerData,
    CURLOPT_RETURNTRANSFER=>true
]);

$result = curl_exec($curl);

curl_close($curl);

$response = json_decode($result);


?>
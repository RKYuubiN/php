<?php

$url = "https://jsonplaceholder.typicode.com/posts";

$postData = [
    'title'=>'Testing POST request using curl php',
    'body'=>'gotta test post request using curl php',
    'userId'=>2,
];


$curl = curl_init($url);

curl_setopt($curl,CURLOPT_HTTPHEADER,[
    "Content-Type:application/json; charset=utf-8",
]);

curl_setopt_array($curl,[
    CURLOPT_POST=>true,
    CURLOPT_POSTFIELDS=>json_encode($postData),
    CURLOPT_RETURNTRANSFER=>true,
]);

$result = curl_exec($curl);

$response = json_decode($result);

echo $result;

// foreach($response as $key=>$value){
//     echo "Key:", $key;
//     echo "Value:", $value;
// }

?>
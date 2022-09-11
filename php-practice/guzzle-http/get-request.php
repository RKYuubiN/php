<?php
    require 'vendor/autoload.php';
    use GuzzleHttp\Client;

    $client = new Client([
        'base_uri'=>'https://www.googleapis.com/',
        'timeout'=>2.0,
        'query'=>[
            'q'=>'shrelock'
        ]
    ]);

    $response = $client->request('GET','books/v1/volumes');

    // print_r($response->getStatusCode());
    $body = $response->getBody();
    $result = json_decode($body);
    print_r($result);
    // echo 'here';

?>
<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

    $client = new Client([
        'base_uri'=>'https://jsonplaceholder.typicode.com/'
    ]);

    $response = $client->request('POST','posts',[
        'json'=>[
            'title'=>'hello',
            'body'=>'this is a test for guzzle post request',
            'userId'=>2
        ]
        ]);

        $body = $response->getBody();

        $body_obj = json_decode($body);

        print_r($body_obj);
?>
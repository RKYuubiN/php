<?php
    require 'vendor/autoload.php';
    use GuzzleHttp\Client;
    

    $client = new Client([
        'base_uri'=>'https://jsonplaceholder.typicode.com/'
    ]);

    $response = $client->request('PUT','posts/3',[
        'json'=>[
            'id'=>101,
            'title'=>'hey',
            'body'=>'something something',
            'userId'=>1
        ]
        ]);

        $body = $response->getBody();

        $body_array = json_decode($body);

        print_r($body_array);
?>
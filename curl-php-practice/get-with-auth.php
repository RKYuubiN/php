<?php

    $apiKey = 'key=AIzaSyCl9tGowSpBh1wL3x9THfaENgAnCwHmZcI';
    $accessToken = 'ya29.A0ARrdaM_2D1K9MDrwpMmi30GwkxPQYjRXoswvualxXTN9WqMFAXcikDoYfnQpj3dDnxDbCQgHgg_CQD_x3ypGtxTzpFxt9lz7CsychojrTcKvBvgbs12YA1QUY0eiMb9_HjhgCcXXGdx1urEtbJMjEfTVYTBM';
    $url = "https://www.googleapis.com/books/v1/mylibrary/bookshelves?".$apiKey;



    $curl = curl_init($url);

    curl_setopt($curl,CURLOPT_HTTPHEADER,[
        'Content-length:0',
        'Content-type:application/json',
        'Accept:application/json',
        'Authorization:Bearer '.$accessToken
    ]);

    curl_setopt_array($curl,[
        CURLOPT_HEADER=>true,
        CURLOPT_RETURNTRANSFER=>true,
    ]);

    $result = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($result);
    print_r($result);
?>
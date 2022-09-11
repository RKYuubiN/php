<?php
    $url = 'https://api.github.com/users/RKYuubiN';
    
    $curl = curl_init($url);



    curl_setopt($curl,CURLOPT_HTTPHEADER,[
        'User-Agent:RKyuubin',
    ]);

    curl_setopt_array($curl,[
        CURLOPT_HEADER=>true,
        CURLOPT_RETURNTRANSFER=>true
    ]);

    $result = curl_exec($curl);

    curl_close($curl);

    print_r($result);
?>
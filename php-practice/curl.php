$curl = curl_init();

curl_setopt($curl,CURLOPTURL,'https://www.googleapis.com/books/v1/volumes?q=sherlock');

curl_exec($curl);

echo $curl;

curl_close($curl);


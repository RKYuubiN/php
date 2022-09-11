<?php 

$url = 'https://www.googleapis.com/books/v1/volumes?q=sherlock';

$curl = curl_init($url);

curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($curl);

curl_close($curl);

$result = json_decode($response);

$volumeInfo = $result->items[0]->volumeInfo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curl REST API</title>
</head>
<body>
    <h1>Curl response here</h1>
    <?php 
        foreach($volumeInfo as $key => $value){?>
            <ul>
                <li>
                    Key: <span><?php echo $key; ?></span> Value: <span><?php echo $value;?></span>
                </li>
            </ul>    
            <?php
            }            
        ?>

</body>
</html>

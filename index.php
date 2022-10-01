<?php

require_once __DIR__ . './vendor/autoload.php';

use GuzzleHttp\Client;
//echo "hello";
//echo $_SERVER["REQUEST_URL"];
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://photo.yupoo.com',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
$res = $client->request("GET", $_SERVER["REQUEST_URI"],[
    'headers'=>['Referer'=>'https://x.yupoo.com/',
    'User-Agent'=> 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:105.0) Gecko/20100101 Firefox/105.0'
    ,'Accept'=>'image/avif,image/webp,*/*']
]);
$fileres = $res->getBody();
addslashes($filers);
header("Content-type:image/jpg");
echo $fileres;
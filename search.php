<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$client=ClientBuilder::create()->build();
$params=[
'index'=>'pvpsit',
'type'=>'dept',
'body'=>[
'query'=>[
'match'=>[
'textField'=>'cse'
]
]
]
];
$response=$client->search($params);
print_r($response);
?>


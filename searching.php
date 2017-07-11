<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$client=ClientBuilder::create()->build();
$params=[
'index'=>'pvpsit',
'type'=>'dept',
'id'=>'cse'
];
$response = $client->get($params);
print_r($response);

?>




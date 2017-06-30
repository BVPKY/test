<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

$params=[
    'index' => 'pvpsit'
];

$response = $client->indices()->delete($params);
print_r($response);

?>


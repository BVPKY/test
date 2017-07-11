<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$client=ClientBuilder::create()->build();
$params = [
    'index' => 'pvpsit',
    'type' => 'dept',
    'id' => '2'
];
$response = $client->delete($params);
print_r($response);
?>

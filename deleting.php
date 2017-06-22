<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

$params=[
    'index' => 'pvpsit',
    'type' => 'dept',
    'id' => 'cse',
    //'body' => ['testField' => 'abc']
];

$response = $client->delete($params);
print_r($response);

?>


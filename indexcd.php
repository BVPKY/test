<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$client=ClientBuilder::create()->build();

$params = [
    'index' => 'pvpsit',
    'body' => [
        'settings' => [
            'number_of_shards' => 2,
            'number_of_replicas' => 0
        ]
    ]
];

$response = $client->indices()->create($params);
print_r($response);
?>


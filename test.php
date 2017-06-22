<?php
require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;
$hosts = [
    '192.168.0.19:9200',         // IP + Port

];

$client = ClientBuilder::create()
		->setHosts($hosts)      // Set the hosts
                    ->build();          
$params = [
    'index' => 'test1',
    'type' => 'test11',
    'id' => '1',
    'body' => ['testField' => 'abc']
];

$response = $client->index($params);
print_r($response);
?>


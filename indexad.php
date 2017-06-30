<?php
require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();
$params = [
	'index' => 'pvpsit',
	'type' => 'dept',
	'id' => '2',
	'body' => ['testField' =>'cse']
];

$response = $client->index($params);
print_r($response);
?>

<?php

require '../header.php';
$scheme = 'https://';
$domain = '.supabase.co/';
$path = 'rest/v1/';
$opts = [];
$client = new PostgrestClient($reference_id, $api_key, $opts, $domain, $scheme, $path);
$response = $client->rpc('add_one_each', ['arr'=> [1, 2, 3] ])->execute();
//$output = json_decode($response->getBody(), true);
$output = $response;
print_r($output);

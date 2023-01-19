<?php

// Include the Fnac API library
require_once('path/to/fnac-api-client.php');

// Configure the connection to the API by providing access keys
$client = new FnacApiClient([
    'client_id' => 'YOUR_CLIENT_ID',
    'client_secret' => 'YOUR_CLIENT_SECRET',
]);

// Product URL
$url = 'https://www.fnac.com/mp24692469/Samsung-Galaxy-S21-5G-Smartphone-portable-d-ecran-6-2-pouces-256-Go-de-stockage-8-Go-de-RAM-Android-11-Noir/a15881614';

// Use the product search API to retrieve information about the product
$response = $client->get('/products', ['url' => $url]);

// Get the product ID
$product_id = $response->product->id;

// Generate the affiliate link by associating the product ID with your Awin affiliate ID
$affiliate_url = 'https://www.fnac.com/' . $product_id . '?awinaffid=YOUR_AWIN_AFFILIATE_ID&awinaffsub=' . $product_id;

echo '<a href="' . $affiliate_url . '">Buy on Fnac</a>';

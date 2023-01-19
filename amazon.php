<?php

// Include the Amazon Product Advertising API library
require_once('path/to/aws-autoloader.php');

// Use the ProductAdvertisingAPIClient class
use Aws\ProductAdvertisingAPI\ProductAdvertisingAPIClient;

// Configure the connection to the API by providing access keys, associate tag, and region
$client = new ProductAdvertisingAPIClient([
    'access_key' => 'YOUR_ACCESS_KEY',
    'secret_key' => 'YOUR_SECRET_KEY',
    'associate_tag' => 'YOUR_ASSOCIATE_TAG',
    'region' => 'YOUR_REGION'
]);

// Product URL
$url = 'https://www.amazon.fr/dp/B08D5W5P5F';

// Extract the product ID from the URL
$product_id = preg_match('/B[0-9]{9}/', $url, $matches);

// Check if the URL is valid
if (!empty($product_id)) {
    $product_id = $matches[0];
} else {
    die("Invalid URL provided");
}

// Request the API for product information by providing the product ID and the desired information
$response = $client->getItems([
    'ItemIds' => [$product_id],
    'Resources' => ['Images.Primary.Small', 'ItemInfo.Title']
]);

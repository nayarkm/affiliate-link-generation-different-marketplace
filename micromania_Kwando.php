<?php

// Product URL
$url = 'https://www.micromania.fr/jeux-video/playstation-5/playstation-5/playstation-5.html';

// Use the Kwanko API to retrieve information about the product
$response = file_get_contents('https://api.kwanko.com/products?url=' . urlencode($url));

// Decode the API response
$response = json_decode($response);

// Get the product ID
$product_id = $response->product->id;

// Generate the affiliate link by associating the product ID with your Kwanko affiliate ID
$affiliate_url = 'https://www.micromania.fr/' . $product_id . '?kw=YOUR_KWANKO_AFFILIATE_ID';

echo '<a href="' . $affiliate_url . '">Buy on Micromania</a>';

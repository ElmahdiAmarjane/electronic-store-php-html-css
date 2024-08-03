<?php
require_once  '../woocommerce-client.php';

function getProducts() {
    $woocommerce = getWooCommerceClient();
    try {
        $products = $woocommerce->get('products');
        return $products;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
        return []; // Initialize as empty array to avoid errors in the rest of the code
    }
    echo '<pre>';
print_r($products);
echo '</pre>';
}
?>
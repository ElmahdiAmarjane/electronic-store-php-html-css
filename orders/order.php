<?php
include '../woocommerce-client.php';
include "../header/header.php";
include "../whatsapp.html";
if (isset($_GET['id'])) {
    $productId = htmlspecialchars($_GET['id']);
  
    $woocommerce = getWooCommerceClient();

    try {
        $product = $woocommerce->get("products/{$productId}");
        
        // Decode the JSON response to a PHP associative array
        $productData = json_decode(json_encode($product), true);

        // Make product data available to the template
        $product = $productData;

        include "order_template.php";
  
    } catch (Exception $e) {
        echo 'Get product Error: ' . $e->getMessage();
    }
  
} else {
    echo "No product ID provided.";
    header("Location: mahal/index.php");
    exit();
}

include "../footer/footer.html";
?>
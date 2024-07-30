
<?php
include "../header/header.php";
// order.php
if (isset($_GET['id'])) {
    $productId = htmlspecialchars($_GET['id']);
    // Now you can use $productId to fetch product details or process the order
   // echo "Product ID: " . $productId;
    include "order_template.html";
} else {
    echo "No product ID provided.";
}

include "../footer/footer.html";
?>

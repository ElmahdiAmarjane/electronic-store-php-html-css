<?php
require_once 'getproducts.php';

$products = getProducts();
$maxProducts = 6; // Maximum number of products to display
$productCount = min($maxProducts, count($products)); // Ensure we do not exceed the number of available products
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./more_products.css">
</head>

<body>
    <div class="otherProductImages">
        <?php for ($i = 0; $i < $productCount; $i++): ?>
        <?php if ($i % 3 == 0): // Start a new row for every 3 products ?>
        <div class="productRow">
            <?php endif; ?>

            <div class="product">
                <a href="/mahal/orders/order.php?id=<?php echo htmlspecialchars($products[$i]->id); ?>">
                    <div class="img">
                        <?php if (!empty($products[$i]->images)): ?>
                        <img src="<?php echo htmlspecialchars($products[$i]->images[0]->src); ?>"
                            alt="<?php echo htmlspecialchars($products[$i]->images[0]->alt); ?>" srcset="">
                        <?php else: ?>
                        <img src="placeholder.jpg" alt="No image available" srcset="">
                        <?php endif; ?>
                    </div>
                    <h1 class="title"><?php echo htmlspecialchars($products[$i]->name); ?></h1>
                </a>
            </div>

            <?php if ($i % 3 == 2 || $i == $productCount - 1): // Close the row after 3 products or on the last product ?>
        </div>
        <?php endif; ?>
        <?php endfor; ?>
    </div>
</body>

</html>
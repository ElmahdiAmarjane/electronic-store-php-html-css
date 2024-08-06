<?php
// Include WooCommerce Client
include "../header/header.php";
include "../whatsapp.html";
include '../woocommerce-client.php';

$woocommerce = getWooCommerceClient();

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

try {
    // Fetch products matching the search term
    $products = $woocommerce->get('products', [
        'search' => $searchTerm,
        'per_page' => 100 // Adjust this as needed
    ]);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    $products = []; // Initialize as empty array to avoid errors in the rest of the code
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
body {
    background-color: #FFF9ED;
}

.allproducts {
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    margin-top: 50px;
    margin: auto;
    background-color: #FFF9ED;
    direction:rtl;

}
.empty-item {
    width: 350px; /* Same width as your .card elements */
    height: 600px; /* Same height as your .card elements */
    margin: auto;
    visibility: hidden; /* Makes the item invisible while maintaining its space */
}

.titleAllProducts-more {
    width: 80%;
    margin:auto;
    margin-top: 140px;
}

.titleAllProducts-more h2 {
    font-size: 30px;
    font-weight: bold;
    text-align: end;
    font-family: "Noto Kufi Arabic", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
    margin-bottom: 20px;
}

.card {
    width: 350px;
    height: 600px;
    /* box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.5); */
    /* max-width: 400px; */
    margin: auto;
    text-align: center;
    font-family: arial;
    padding: 10px;
    margin-bottom: 40px;
    border-radius: 20px;
    transition: 1s;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.card .divproductimg img {
    width: 100%;
    height: 100%;
    transform: scale(0.8)
}

.card:hover {
    /* border: 2px solid rgba(0, 0, 0, 0.5); */
    /* border-radius: 10px; */
    transform: scale(1.01)
}

.card h1 {
    /* padding-bottom: 10px; */
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 20px;

}

.card form {
    width: 80%;
}

.price {
    color: #1d9605;
    font-size: 20px;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding-top: 15px;
}

.oldPrice {
    color: #5a5656;
    font-size: 20px;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding-top: 15px;
    text-decoration: line-through;
}

.card img:hover {
    transform: scale(0.9);
    transition: 1s;
    /* Zoom in by 20% */
}

.card button:hover {
    opacity: 0.7;
}

.divproductname {
    width: 80%;
    overflow: hidden;
    padding: 10px 0;
    height: 60px;
    /* background-color : red; */

}

.divproductimg {
    width: 100%;
    max-height: 300px;
    min-height: 300px;
    display: flex;
    justify-content: center;
    /* Center horizontally */
    align-items: center;
    /*background-color: green;*/
    border: 5px solid #6EACDA;
    border-radius: 40px;
    margin-bottom: 20px;
}

.divproductimg:hover {
    overflow: visible;
}

.divproductprice {
    width: 100%;
    height: 100px;
    /* background-color : yellow; */
}

.card button {
    border: none;
    outline: 0;
    padding: 12px ;
    color: white;
    background-color: #6EACDA;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    margin-top: 0px;
    font-family: "Noto Kufi Arabic", sans-serif;

}
.showmorediv {
    width:100%;
    height:50px;
    text-align :center;
    margin-top : 60px;
}
.showmorediv a{
    width:100px;
    padding: 10px 35px;
    text-align :center;
    background-color:#3398E3;
    color:white;
    font-family: "Noto Kufi Arabic", sans-serif;
    text-decoration : none; 
}
.showmorediv a:hover{
    background-color:white;
    color:#3398E3;
    border:1px solid #3398E3;

}

@media screen and (max-width: 900px) {

    .titleAllProducts-more {
        margin-top: 90px;
    }

    .allproducts {
        width: 100%;
        margin-top: 5px;
        /* background-color: red; */
    }

    .titleAllProducts-more h2 {
        font-size: 16px;
        margin-bottom: 0px;
    }

    .card {
        width: 50%;
        height: 450px;
        margin: auto;
        padding: 10px;
        margin-bottom: 20px;
    }




    .card h1 {
        /* padding-bottom: 10px; */
        font-size: 20px;

    }

    .card form {
        width: 80%;
    }

    .price {
        font-size: 16px;
        padding-top: 15px;
    }

    .oldPrice {
        font-size: 14px;
        padding-top: 10px;
    }

    .card img:hover {
        transform: scale(0.9);
        transition: 1s;
        /* Zoom in by 20% */
    }

    .card button:hover {
        opacity: 0.7;
    }

    .divproductname {
        width: 80%;
        overflow: scroll;
        padding: 10px 0;
        height: 60px;

        /* background-color : red; */

    }

    .divproductimg {
        max-height: 200px;
        min-height: 200px;
        border: 3px solid #6EACDA;
        border-radius: 40px;
        margin-bottom: 10px;
    }



    .divproductprice {
        width: 100%;
        height: 80px;
        /* background-color: yellow; */

    }

    .card form button {
        border: none;
        outline: 0;
        padding: 2px;
        color: white;
        width: 100%;
        font-size: 16px;
        border-radius: 3px;
    }
}
.nothingfoundmsg{
    font-size :16px;
    font-family: "Noto Kufi Arabic", sans-serif;
}
</style>

<body>
    <div class="titleAllProducts-more">
        <h2>النتائج التي تم العثور عليها </h2>
    </div>
    <div class="allproducts">
        <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
        <div class="card">

            <?php
                        // Use the first image if available
                        $imageSrc = !empty($product->images) ? $product->images[0]->src : '';
                    ?>
            <div class="divproductimg">
                <img src="<?php echo htmlspecialchars($imageSrc);?>"
                    alt="<?php echo htmlspecialchars($product->name); ?>">
            </div>

            <div class="divproductname">
                <h1><?php echo htmlspecialchars($product->name); ?></h1>
            </div>

            <p class="stars">⭐⭐⭐⭐⭐ </p>
            <div class="divproductprice">
                <p class="oldPrice">
                    <?php echo !empty($product->regular_price) ? htmlspecialchars($product->regular_price) . ' DH' : ''; ?>
                </p>
                <p class="price">
                    <?php echo !empty($product->sale_price) ? htmlspecialchars($product->sale_price) . ' DH' : 'Price Not Available'; ?>
                </p>

            </div>

            <form action="/mahal/orders/order.php" method="get">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($product->id); ?>">
                <button type="submit">اطلب الآن</button>
            </form>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="nothingfoundmsg">لا يوجد أي منتج بهذا الإسم </p>
        <?php endif; ?>
    </div>
     <!-- <div class ="showmorediv">
          <a href="">استعراض المزيد</a>
     </div> -->

 <script>
       function adjustLastRow() {
    const container = document.querySelector('.allproducts');
    const items = Array.from(container.children);
    const itemsPerRow = 4; // Adjust this value based on your layout
    const totalItems = items.length;
    const lastRowItems = totalItems % itemsPerRow;
    
    // Remove any existing empty items
    const emptyItems = container.querySelectorAll('.empty-item');
    emptyItems.forEach(item => item.remove());

    if (lastRowItems > 0 && lastRowItems < itemsPerRow) {
        const emptyItemsCount = itemsPerRow - lastRowItems;
        for (let i = 0; i < emptyItemsCount; i++) {
            const emptyDiv = document.createElement('div');
            emptyDiv.classList.add('empty-item');
            container.appendChild(emptyDiv);
        }
    }
}

window.addEventListener('load', adjustLastRow);
window.addEventListener('resize', adjustLastRow);

    </script>
  
</body>

</html>
<?php   include "../banner/banner.php"; ?>
<?php   include "../footer/footer.html"; ?>
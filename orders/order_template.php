<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./order_template.css">
</head>

<body>

    <div class="allproductSelected">
        <div class="productImage" id="productImage">
            <?php $imageSrc = !empty($product['images']) ? $product['images'][0]['src'] : ''; ?>
            <img src="<?php echo htmlspecialchars($imageSrc); ?>"
                alt="<?php echo htmlspecialchars($product['name']); ?>">
            <div class="productdescription">
               <p class="p-price"><?php echo htmlspecialchars($product['price']); ?> DH</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p><?php echo htmlspecialchars($product['name']); ?></p>
                <p><?php echo htmlspecialchars(strip_tags($product['description'])); ?></p>



            </div>
        </div>
        <div class="productSelected">
            <h1><?php echo htmlspecialchars($product['name']); ?></h1>
            <hr>
            <form id="product-form" action="" method="post" class="cf">
                <div class="half left cf">
                    <label for="input-name">الاسم</label>
                    <input name="name" type="text" id="input-name" placeholder="الاسم" required>
                </div>
                <div class="half right cf">
                    <label for="input-phone">رقم الهاتف</label>
                    <input name="phone" type="text" id="input-phone" placeholder="رقم الهاتف" required>
                </div>
                <div class="half cf">
                    <label for="input-address">العنوان الكامل والمدينة</label>
                    <input name="address" type="text" id="input-address" placeholder="العنوان الكامل والمدينة">
                </div>
                <div class="half cf">
                <label for="input-units">عدد الوحدات</label>

    <div class="input-container">
        <button type="button" class="btn-decrease">-</button>
        <input name="nbr-units" type="text" id="input-units" placeholder="عدد الوحدات" value="1">
        <button type="button" class="btn-increase">+</button>
    </div>
</div>

               <div class="truesubmitOrder">
                    <input name="productId" type="hidden" value="<?php echo $productId  ?>">
                    <input name="productTitle" type="hidden" value="<?php echo $product['name']?>">
                    <input name="submit" type="submit" value="أكمل طلبك الأن" id="submit">
                </div>
                <div class="submitOrder">
                    <!-- <input name="productId" type="hidden" value="<?php echo $productId  ?>"> -->
                    <!-- <input name="productTitle" type="hidden" value="<?php echo $product['name']?>"> -->
                    <input name="" type="button" value="أكمل طلبك الأن" id="submit2">
                </div>
            </form>
            <div class="loading" id="loading" style="display: none;">
                <img src="../img/loading.gif" alt="" srcset="">
                <h3>جاري الإرسال </h3>
            </div>
        </div>
        <div class="moreImages" id="moreImages">

            <div class="titlemoreImages">
                <h1> صور اخرى لنفس المنتج</h1>
            </div>
            <div class="moreProductImages">
                <?php foreach ($product['images'] as $image): ?>
                <div class=" img">
                    <img src="<?php echo htmlspecialchars($image['src']); ?>" alt="" srcset="">
                </div>
                <?php endforeach; ?>
            </div>
         

        </div>
        <!-- <div class="moreOrders">
            <div class="titlemoreOrders">
                <h1>المزيد من المنتجات ذات صلة </h1>
            </div>
             include './more_products.php'  // for uncomment add php tag
        </div> -->
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('product-form');
        const loading = document.getElementById('loading');

        form.addEventListener('submit', e => {
            e.preventDefault();

            // Show the loading indicator
            loading.style.display = 'block';

            // Create a FormData object from the form
            const formData = new FormData(form);

            // Convert FormData to a JSON object
            const data = {
                name: formData.get('name'),
                address: formData.get('address'),
                phone: formData.get('phone'),
                nbrUnits: formData.get('nbr-units'),
                productId: formData.get('productId'),
            };
            // Send a POST request with the JSON data
            fetch('./createOrderWoo.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data) // Convert the JSON object to a JSON string
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(result => {
                    console.log('Success:', result);
                    // Handle successful response here (e.g., show a success message)
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error response here (e.g., show an error message)
                });

            const scriptURL =
                "https://script.google.com/macros/s/AKfycbyVVjcTC_LEKgs8A7j6qOV_hOKKrpXY18S0aYsehZPqCdOZbXzQ9xOQLExfajGWXMzgBg/exec";
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    if (response.ok) {
                        loading.style.display = 'none';
                        window.location.href = '../thankspage/thankspage.php';
                    } else {
                        console.error('Response not OK', response);
                        loading.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    loading.style.display = 'none';
                });
        });
    });

    ///://////////////////////////////////////
    document.addEventListener('DOMContentLoaded', () => {
        const input = document.getElementById('input-units');
        const btnDecrease = document.querySelector('.btn-decrease');
        const btnIncrease = document.querySelector('.btn-increase');

        btnDecrease.addEventListener('click', () => {
            // Get the current value and decrease it
            let value = parseInt(input.value, 10);
            if (value > 1) {
                input.value = value - 1;
            }
        });

        btnIncrease.addEventListener('click', () => {
            // Get the current value and increase it
            let value = parseInt(input.value, 10);
            input.value = value + 1;
        });
    });

///////////////////////////////::
document.addEventListener('DOMContentLoaded', () => {
        const submitButton = document.getElementById('submit2');

        submitButton.addEventListener('click', () => {
            // Scroll to the top of the page
            window.scrollTo({
                top: 350,
                behavior: 'smooth' // This makes the scroll smooth
            });
        });
    });
   
    </script>

</body>

</html>
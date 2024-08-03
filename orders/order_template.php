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
        <div class="productImage">
            <?php $imageSrc = !empty($product['images']) ? $product['images'][0]['src'] : ''; ?>
            <img src="<?php echo htmlspecialchars($imageSrc); ?>"
                alt="<?php echo htmlspecialchars($product['name']); ?>">
            <div class="productdescription">
                <p>Product id : <?php echo $productId; ?></p>
                <p><?php echo htmlspecialchars($product['name']); ?></p>
                <p> OS: Windows 11 Professionnel</p>
                <p>Carte vidéo: Carte graphique Intel® Arc™ A370M</p>
                <p>Mémoire: 16 Go de mémoire DDR5</p>
                <p>Stockage: Disque SSD M.2 PCIe NVMe de 1 To</p>
                <p>Écran: Écran 15.6" Full HD+ (1920X1200)</p>
            </div>
        </div>
        <div class="productSelected">
            <h1><?php echo htmlspecialchars($product['name']); ?></h1>
            <hr>
            <form id="product-form" action="./createOrderWoo.php" method="post" class="cf">
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
                    <label for="input-units">عدد الوحدات </label>
                    <input name="nbr-units" type="number" id="input-units" placeholder="عدد الوحدات " value="1">
                </div>
                <div class="submitOrder">
                    <input name="productId" type="hidden" value="<?php echo $productId  ?>">
                    <input name="submit" type="submit" value="أكمل طلبك الأن" id="submit">
                </div>
            </form>
            <div class="loading" id="loading" style="display: none;">
                <img src="../img/Spinner@1x-0.4s-200px-200px.gif" alt="" srcset="">
                <h3>جاري الإرسال </h3>
            </div>
        </div>
        <div class="moreOrders">
            <div class="titlemoreOrders">
                <h1>المزيد من المنتجات ذات صلة </h1>
            </div>
            <div class="moreordresimages">
                <img src="/mahal/img/p1.jpg" alt="" srcset="" width="600px">
                <br>
                <img src="/mahal/img/p2.jpg" alt="" srcset="" width="600px">
                <br>
                <img src="/mahal/img/p3.jpg" alt="" srcset="" width="600px">
            </div>
        </div>
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
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./products.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
</head>
   <style>

    .allproducts{
         width: 100%;
         display: flex;
         flex-wrap: wrap;
         margin-top: 50px;
    }
    .titleAllProducts{
        width: 100%;
        margin-top: 100px;
    }
    .titleAllProducts h2{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        font-family: "Noto Kufi Arabic", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 400px;
    margin: auto;
    text-align: center;
    font-family: arial;
    border: 1px solid #6835b9;
    padding: 30px;
    margin-bottom: 80px;
    border-radius: 20px;
  }
  .card h1 {
      padding-bottom: 20px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  .price {
    color: #1d9605;
    font-size: 22px;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding-top: 15px;
  }
  .oldPrice {
    color: #5a5656;
    font-size: 22px;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding-top: 15px;
    text-decoration:line-through;
  }

  
  .card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #5e12d8;
    text-align: center;
    cursor: pointer;
    width: 50%;
    font-size: 18px;
    margin-top: 20px;
    font-family: "Noto Kufi Arabic", sans-serif;
  }
  .card img:hover {
    transform: scale(1.2); /* Zoom in by 20% */
}
  
  .card button:hover {
    opacity: 0.7;
  }

  @media screen and (max-width: 700px) {
     
    .titleAllProducts{
        margin-top: 0;
    }
  }
   </style>
<body>

     
    <div class="titleAllProducts">
        <h2>جميع المنتجات</h2>
   </div>
    <div class="allproducts">
    <div class="card">
        <h1>DELL Latitude 5500</h1>
  <img src="/mahal/img/dell3.png" alt="Denim Jeans" width="300px" >
  
  <p>I5 11gen SSD 220 </p>
  <p class="oldPrice">4500 DH</p>
  <p class="price">4500 DH</p>
  <form action="/mahal/orders/order.php" method="get">
            <input type="hidden" name="id" value="12345">
            <button type="submit">اطلب الآن</button>
        </form>
</div>
<div class="card">
    <h1>DELL Latitude 5500</h1>
<img src="/mahal/img/dell3.png" alt="Denim Jeans" width="300px" >

<p>I5 11gen SSD 220 </p>
<p class="oldPrice">4500 DH</p>
<p class="price">4500 DH</p>
<p><button>اطلب الآن</button></p>
</div>
<div class="card">
    <h1>DELL Latitude 5500</h1>
<img src="img/dell3.png" alt="Denim Jeans" width="300px" >

<p>I5 11gen SSD 220 </p>
<p class="oldPrice">4500 DH</p>
<p class="price">4500 DH</p>
<p><button>اطلب الآن</button></p>
</div>
<div class="card">
    <h1>DELL Latitude 5500</h1>
<img src="img/dell3.png" alt="Denim Jeans" width="300px" >

<p>I5 11gen SSD 220 </p>
<p class="oldPrice">4500 DH</p>
<p class="price">4500 DH</p>
<p><button>اطلب الآن</button></p>
</div>
<div class="card">
    <h1>DELL Latitude 5500</h1>
<img src="img/dell3.png" alt="Denim Jeans" width="300px" >

<p>I5 11gen SSD 220 </p>
<p class="oldPrice">4500 DH</p>
<p class="price">4500 DH</p>
<p><button>اطلب الآن</button></p>
</div>
<div class="card">
    <h1>DELL Latitude 5500</h1>
<img src="img/dell3.png" alt="Denim Jeans" width="300px" >

<p>I5 11gen SSD 220 </p>
<p class="oldPrice">4500 DH</p>
<p class="price">4500 DH</p>
<p><button>اطلب الآن</button></p>
</div>
<div class="card">
    <h1>DELL Latitude 5500</h1>
<img src="img/dell3.png" alt="Denim Jeans" width="300px" >

<p>I5 11gen SSD 220 </p>
<p class="oldPrice">4500 DH</p>
<p class="price">4500 DH</p>
<p><button>اطلب الآن</button></p>
</div>
<div class="card">
    <h1>DELL Latitude 5500</h1>
<img src="img/dell3.png" alt="Denim Jeans" width="300px" >

<p>I5 11gen SSD 220 </p>
<p class="oldPrice">4500 DH</p>
<p class="price">4500 DH</p>
<p><button>اطلب الآن</button></p>
</div>

    </div>
</body>
</html>
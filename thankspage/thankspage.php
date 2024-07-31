<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #5223c2,#9571eb);
            color: #fff;
            text-align: center;
            font-family: "Noto Kufi Arabic", sans-serif;
        }

        .allthaknspage {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            width: 400px;
        }

        .allthaknspage h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .allthaknspage h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .allthaknspage img {
            width: 100px;
            margin-top: 20px;
        }

        .allthaknspage .back-home {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .allthaknspage .back-home:hover {
            background-color: #45a049;
        }

        @media (max-width: 400px) {
            .allthaknspage h1 {
                font-size: 1.5em;
            }

            .allthaknspage h2 {
                font-size: 1.2em;
            }

            .allthaknspage img {
                width: 80px;
            }

            .allthaknspage .back-home {
                padding: 8px 16px;
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="allthaknspage">
        <h1>شكرًا على ثقتك بنا</h1>
        <h2>سوف نتصل بك في أقرب وقت لتأكيد طلبك</h2>
        <img src="/mahal/img/verified.png" alt="Verified">
        <br>
        <a href="/mahal/index.php" class="back-home">العودة إلى الصفحة الرئيسية</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mahal</title>
    <!-- <link href="styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">

    <style>
    :root {
        --bgcolor: #5e12d8;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        /* margin-top: 70px; Adjust this value to match the height of the header */
    }

    .page-header-nav {
        background-color: var(--bgcolor);
        padding: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 50px;
        /* Default top position */
        width: 100%;
        z-index: 100;
        transition: top 0.3s;
        /* Smooth transition */
    }

    .page-header-nav.sticky {
        top: 0;
        /* Top position when scrolled */
    }

    .logo {
        color: white;
        align-self: center;
        margin-left: 10rem;
        display: flex;
        align-items: center;
    }

    .nav-bar a {
        color: white;
        padding: 1.5rem;
        cursor: pointer;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: bold;
        font-size: 20px;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    .menu-icon {
        color: white;
        cursor: pointer;
        display: none;
    }

    button {
        font-size: 1rem;
        border: 1px solid black;
        border-radius: 5px;
        padding: 0.9rem;
    }

    .centered-text {
        text-align: center;
        font-weight: bold;
        color: #ffffff;
        background-color: #5e12d8;
        height: 60px;
        padding-top: 20px;
        font-size: 10px;
        font-family: "Noto Kufi Arabic", sans-serif;
        word-spacing: 5px
    }

    @media screen and (max-width: 700px) {
        .centered-text {
            height: 40px;
            padding-top: 5px;
            font-weight: lighter;
            font-size: 8px;
        }

        .nav-bar {
            display: none;
            position: absolute;
            top: 3.7rem;
            left: 0;
            width: 100%;
            background-color: var(--bgcolor);
            text-align: center;
        }

        .nav-bar.responsive {
            display: block;
        }

        .nav-bar a {
            display: block;
        }

        .menu-icon {
            display: block;
            z-index: 1;
        }

        button {
            padding: 0.4rem;
        }

        .logo {

            margin-left: 0.5rem;
        }

        .page-header-nav {
            top: 42px;
            /* Default top position */

        }
    }
    </style>
</head>

<body>
    <div class="page-header">
        <div class="centered-text">
            <h3> خدمة العملاء دائما في خدمتكم على رقمنا الهاتفي : 0655443322
                التوصيل بالمجان إلى جميع مدن المملكة </h3>
        </div>
        <div class="page-header-nav">
            <div class="logo">
                <img src="/mahal/img/lenovologo.png" alt="" width="120px">
            </div>
            <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
                <i class="fa fa-bars"></i>
            </a>
            <div id="navigation-bar" class="nav-bar">
                <a href="/mahal/index.php" class="active">الصفحة الرئيسية</a>
                <a href="/mahal/contactus/contactus.php">اتصل بنا</a>
                <!-- <a href="">التصنيفات</a> -->
                <a href="/mahal/aboutus/aboutus.php">من نحن</a>
            </div>
        </div>
    </div>

    <script>
    function onMenuClick() {
        var navbar = document.getElementById("navigation-bar");
        var responsive_class_name = "responsive";
        navbar.classList.toggle(responsive_class_name);
    }

    window.addEventListener('scroll', function() {
        var headerNav = document.querySelector('.page-header-nav');
        if (window.scrollY > 5) {
            headerNav.classList.add('sticky');
        } else {
            headerNav.classList.remove('sticky');
        }
    });
    </script>
</body>

</html>
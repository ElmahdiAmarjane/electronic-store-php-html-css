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
        --bgcolor: #FFF9ED;
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
        padding: 3rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 100px;
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
        width: 30%;
        color: white;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        /* border: 1px solid red; */
    }

    .nav-bar {
        width: 30%;
        /* border: 1px solid green; */
    }

    .header-search {
        width: 30%;
        border: 1px solid black;
    }

    .nav-bar a {
        color: #6EACDA;
        padding: 2rem;
        cursor: pointer;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    .menu-icon {
        color: white;
        cursor: pointer;
        display: none;
    }



    .centered-text {
        text-align: center;

        color: #ffffff;
        background-color: #6EACDA;
        height: 70px;
        /* padding: 20px; */
        font-family: "Noto Kufi Arabic", sans-serif;
        word-spacing: 5px;
        margin-top: 30px;
        align-items: center;
        justify-content: center;
        display: flex;

    }

    .centered-text h3 {
        font-weight: light;
        font-size: 14px;
    }

    .header-actions-btn {
        width: 30%;
        display: flex;
        justify-content: space-evenly;
    }

    .header-actions-btn svg,
    .header-actions-btn img {
        width: 40px;
        height: 40px;
    }

    @media screen and (max-width: 700px) {
        .centered-text {
            height: 50px;
            padding-top: 5px;
            margin-top: 0px;

        }

        .centered-text h3 {
            font-weight: light;
            font-size: 12px;
        }

        .nav-bar {
            display: none;
            position: absolute;
            top: 5rem;
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
            color: #6EACDA;
            display: block;
            z-index: 1;

        }




        .logo {
            border: 1px solid white;
        }

        .page-header-nav {
            top: 50px;
            padding: 0.5rem;
            background-color: green;
            /* Default top position */

        }

        .header-actions-btn img {
            width: 25px;
        }

        .header-actions-btn {
            border: 1px solid black;
        }

        .divmenu {
            border: 1px solid yellow;
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
            <div class="header-actions-btn">
                <img src="/mahal/img/shopping-cart.png" alt="">
                <img src="/mahal/img/shopping-cart.png" alt="">

                <!-- ############## -->

            </div>

            <div class="logo">
                <img src="/mahal/img/lenovologo.png" alt="" width="120px">
            </div>
            <div class="divmenu">
                <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

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
        if (window.scrollY > 80) {
            headerNav.classList.add('sticky');
        } else {
            headerNav.classList.remove('sticky');
        }
    });
    </script>
</body>

</html>
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
    <link rel="stylesheet" href="/mahal/header/header.css">
    
   
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
                <img id ="toggleBtn" src="/mahal/img/searchicon.png" alt="">

                <!-- ############## -->

            </div>

            <div class="logo">
                <a href="/mahal/index.php"> <img src="/mahal/img/logodsc.png" alt="" ></a> 
            </div>
            <div class="divmenu"  onclick="onMenuClick()">
                <div id="menu-icon" class="menu-icon" >
                    <img src="/mahal/img/open-menu.png" alt="menu">

                </div>
            </div>

            <div id="navigation-bar" class="nav-bar">
                <a href="/mahal/index.php" class="active">الصفحة الرئيسية</a>
                <a href="/mahal/contactus/contactus.php">اتصل بنا</a>
                <!-- <a href="">التصنيفات</a> -->
                <a href="/mahal/aboutus/aboutus.php">من نحن</a>
            </div>
        </div>
        <form action="/mahal/showmore/searchproduct.php" method="GET">
        <div class="searchbar" id="toggleDiv"> 
            <input type="text" name="search"  placeholder="ابحث هنا عن أي منتج"/>
        </div>
        </form>
    </div>

    <script>
    function onMenuClick() {
        var navbar = document.getElementById("navigation-bar");
        var responsive_class_name = "responsive-nav";
        navbar.classList.toggle(responsive_class_name);
    }

    window.addEventListener('scroll', function() {
        var headerNav = document.querySelector('.page-header-nav');
        const div = document.getElementById('toggleDiv');
        if (window.scrollY > 40) {
            headerNav.classList.add('sticky');
            if(window.innerWidth > 800){
                div.style.marginTop = '36px';
            } else{
                div.style.marginTop = '8px';
            }
           
            
        } else {
            headerNav.classList.remove('sticky');
            if(window.innerWidth > 800){
                div.style.marginTop = '138px';
            } else{
                div.style.marginTop = '56px';
            }
        }
      
    });
 
        function toggleDivVisibility() {
            const div = document.getElementById('toggleDiv');
            if (div.style.display === 'none' || div.style.display === '') {
                div.style.display = 'flex';
            } else {
                div.style.display = 'none';
            }
        }

        document.getElementById('toggleBtn').addEventListener('click', toggleDivVisibility);

    </script>
</body>

</html>
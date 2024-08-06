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
        color: #3398E3;
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
        background-color: #3398E3;
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
        width: 35px;
        height: 35px;
    }

    .searchbar {
        position :fixed;
        z-index:20;
          background-color : #3398E3;
          width:100%;
          height : 60px;
          margin-top:138px;
          display:none;
          align-items:center;
          justify-content : center;
          padding:2px;
          
         
    }
    .searchbar input{
          background-color : white;
          width:60%;
          height : 90%;
          direction:rtl;
          font-family: "Noto Kufi Arabic", sans-serif;
          padding-right:10px;
          border:none;
          outline:none;
    }

    @media screen and (max-width: 1000px) {
        .searchbar {
          background-color : #3398E3;
          width:100%;
          height : 60px;
          margin-top:60px;
          display:none;
          align-items:center;
          justify-content : center;
          
         
    }
    .searchbar input{
          background-color : white;
          width:90%;
          height : 90%;
          direction:rtl;
          font-family: "Noto Kufi Arabic", sans-serif;
          padding-left:10px;
          border:none;
          outline:none;
    }
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
            top: 3rem;
            left: 0;
            width: 100%;
            background-color: var(--bgcolor);
            text-align: end;
            height:200px; 


        }

        .responsive-nav {
            display: flex;
            flex-direction:column;  
           
            
        }
        .nav-bar a {
        padding: 1rem;
       

    }

        .nav-bar .divmenu {
            display: block;
        }

        .menu-icon {
            display: block;
            z-index: 1;
        }




        .logo {}

        .page-header-nav {
            top: 50px;
            padding: 0.5rem;

            /* Default top position */
        }

        .header-actions-btn img {
            width: 20px;
            height: 20px;
        }

        .header-actions-btn {}

        .divmenu {
            width: 30%;
            justify-content: end;
            display: flex;
            /* align-items: flex-start; */
            align-items: center;
            height: 40px;
        }

        .divmenu .menu-icon {
            height: 20px;
        }

        .divmenu .menu-icon img {
            height: 20px;
            width: 25px;
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
                <img id ="toggleBtn" src="/mahal/img/searchicon.png" alt="">

                <!-- ############## -->

            </div>

            <div class="logo">
                <img src="/mahal/img/lenovologo.png" alt="" width="100px">
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
        if (window.scrollY > 80) {
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
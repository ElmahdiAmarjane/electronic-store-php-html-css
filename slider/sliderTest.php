<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
    .slide-container {
        margin: 140px auto;
        position: relative;
        width: 96%;
        /* Add max width for better control on larger screens */
        height: 550px;
        border-radius: 20px;
        overflow: hidden;
    }

    .slides {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .slides img {
        width: 100%;
        height: 100%;
        position: absolute;
        object-fit: cover;
        transition: opacity 1s ease;
        opacity: 0;
    }

    .slides img.active {
        opacity: 1;
    }

    .buttons {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        z-index: 1;
    }

    .buttons span {
        border-radius: 50%;
        padding: 10px;
        font-size: 30px;
        cursor: pointer;
        margin: 10px;
        color: white
    }



    .dotsContainer {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
    }

    .dotsContainer .dot {
        width: 15px;
        height: 15px;
        margin: 0 5px;
        border-radius: 50%;
        background-color: #ddd;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .dotsContainer .active {
        background-color: #6eacda;
    }

    @media screen and (max-width: 700px) {
        .slide-container {
            margin: 60px auto;
            margin-bottom: 50px;
            height: 130px;
            width: 99%;
            border-radius: 5px;
        }

        .slides img {
            height: 100%;
        }

        .buttons span {
            font-size: 5px;
        }

        .dotsContainer {
            bottom: 5px;
        }

        .dotsContainer .dot {
            width: 8px;
            height: 8px;
        }
    }
    </style>
</head>

<body>

    <div class="slide-container">
        <div class="slides">
            <img src="/mahal/img/banner/la-caisse-banner.jpg" class="active" alt="Slide 1">
            <img src="/mahal/img/banner/imp-guiensha.jpg" alt="Slide 2">
            <img src="/mahal/img/banner/pc-bureau-banner.jpg" alt="Slide 3">
        </div>

        <div class="buttons">
            <span class="prev" aria-label="Previous Slide">&#10094;</span>
            <span class="next" aria-label="Next Slide">&#10095;</span>
        </div>

        <div class="dotsContainer">
            <div class="dot active" attr='0'></div>
            <div class="dot" attr='1'></div>
            <div class="dot" attr='2'></div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const slideImages = document.querySelectorAll('.slides img');
        const next = document.querySelector('.next');
        const prev = document.querySelector('.prev');
        const dots = document.querySelectorAll('.dot');

        let counter = 0;
        let autoSlideInterval;

        function updateIndicators() {
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === counter);
            });
        }

        function showSlide(index) {
            slideImages.forEach((img, i) => {
                img.classList.toggle('active', i === index);
            });
        }

        function slideNext() {
            counter = (counter + 1) % slideImages.length;
            showSlide(counter);
            updateIndicators();
        }

        function slidePrev() {
            counter = (counter - 1 + slideImages.length) % slideImages.length;
            showSlide(counter);
            updateIndicators();
        }

        function startAutoSliding() {
            autoSlideInterval = setInterval(slideNext, 6000);
        }

        function stopAutoSliding() {
            clearInterval(autoSlideInterval);
        }

        function resumeAutoSliding() {
            startAutoSliding();
        }

        next.addEventListener('click', slideNext);
        prev.addEventListener('click', slidePrev);

        document.querySelector('.slide-container').addEventListener('mouseover', stopAutoSliding);
        document.querySelector('.slide-container').addEventListener('mouseout', resumeAutoSliding);

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.getAttribute('attr'));
                if (index !== counter) {
                    counter = index;
                    showSlide(counter);
                    updateIndicators();
                }
            });
        });

        startAutoSliding();
    });
    </script>
</body>

</html>
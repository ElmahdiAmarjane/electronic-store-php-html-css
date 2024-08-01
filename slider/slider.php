<!DOCTYPE html>
<html>
<head>
	<title>Image Slider</title>
	<style  type="text/css">
		
		.slide-container {
    margin: 100px auto; /* Center horizontally and add top margin */
    position: relative;
    width: 96%;
    height: 600px;
    /* border: 3px solid #ede6d6; */
    border-radius: 20px;
    z-index: -10;
}

		.slide-container .slides{
			width: 100%;
			height: calc(100% - 40px);
			position: relative;
			overflow: hidden;
            border-radius : 20px;
		}
		.slide-container .slides img{
			width: 100%;
			height: 100%;
			position: absolute;
			object-fit: cover;
		}
		.slide-container .slides img:not(.active){
			top: 0;
			left: -100%;
		}
		span.next, span.prev{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 14px;
			color: #eeeeee32;
			font-size: 24px;
			font-weight: bold;
			transition: 0.5s;
			border-radius: 3px;
			user-select: none;
			cursor: pointer;
			z-index: 1;
		}
		span.next{
			right: 20px;
		}
		span.prev{
			left: 20px;
		}
		span.next:hover, span.prev:hover{
			background-color: #ede6d6;
			opacity: 0.8;
			color: #222;
		} 
		.dotsContainer{
			position: absolute;
			bottom: 5px;
			z-index: 3;
			left: 50%;
			transform: translateX(-50%);
		}
		.dotsContainer .dot{
			width: 15px;
			height: 15px;
			margin: 0px 2px;
			border: 3px solid #5e12d8;
			border-radius: 50%;
			display: inline-block;
			cursor: pointer;
			transition: background-color 0.6s ease;
		}
		.dotsContainer .active{
			background-color: #5e12d8;
		}

		@keyframes next1{
			from{
				left: 0%
			}
			to{
				left: -100%;
			}
		}
		@keyframes next2{
			from{
				left: 100%
			}
			to{
				left: 0%;
			}
		}

		@keyframes prev1{
			from{
				left: 0%
			}
			to{
				left: 100%;
			}
		}
		@keyframes prev2{
			from{
				left: -100%
			}
			to{
				left: 0%;
			}
		}
        @media screen and (max-width: 700px) {

            .slide-container .slides{
			height: 250px;
            border-radius : 20px;
		}
        .slide-container {
    margin: 100px auto 0; /* Center horizontally and add top margin */
    position: relative;
    width: 96%;
    height: 300px;
    /* border: 3px solid #ede6d6; */
    border-radius: 20px;
}
.dotsContainer{
		 display : none;
		}
        }

	</style>
</head>
<body>

<div class="slide-container">
	
	<div class="slides">
		<img src="/mahal/img/p1.jpg" class="active">
		<img src="/mahal/img/p2.jpg">
		<img src="/mahal/img/p3.jpg">
		
	</div>

	<div class="buttons">
		<span class="next">&#10095;</span>
		<span class="prev">&#10094;</span>
	</div>

	<div class="dotsContainer">
		<div class="dot active" attr='0' onclick="switchImage(this)"></div>
		<div class="dot" attr='1' onclick="switchImage(this)"></div>
		<div class="dot" attr='2' onclick="switchImage(this)"></div>
        
	</div>

</div>

<script type="text/javascript">
	
	// // Access the Images
	// let slideImages = document.querySelectorAll('img');
	// // Access the next and prev buttons
	// let next = document.querySelector('.next');
	// let prev = document.querySelector('.prev');
	// // Access the indicators
	// let dots = document.querySelectorAll('.dot');

	// var counter = 0;

	// // Code for next button
	// next.addEventListener('click', slideNext);
	// function slideNext(){
	// slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
	// if(counter >= slideImages.length-1){
	// 	counter = 0;
	// }
	// else{
	// 	counter++;
	// }
	// slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
	// indicators();
	// }

	// // Code for prev button
	// prev.addEventListener('click', slidePrev);
	// function slidePrev(){
	// slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
	// if(counter == 0){
	// 	counter = slideImages.length-1;
	// }
	// else{
	// 	counter--;
	// }
	// slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
	// indicators();
	// }

	// // Auto slideing
	// function autoSliding(){
	// 	deletInterval = setInterval(timer, 3000);
	// 	function timer(){
	// 		slideNext();
	// 		indicators();
	// 	}
	// }
	// autoSliding();

	// // Stop auto sliding when mouse is over
	// const container = document.querySelector('.slide-container');
	// container.addEventListener('mouseover', function(){
	// 	clearInterval(deletInterval);
	// });

	// // Resume sliding when mouse is out
	// container.addEventListener('mouseout', autoSliding);

	// // Add and remove active class from the indicators
	// function indicators(){
	// 	for(i = 0; i < dots.length; i++){
	// 		dots[i].className = dots[i].className.replace(' active', '');
	// 	}
	// 	dots[counter].className += ' active';
	// }

	// // Add click event to the indicator
	// function switchImage(currentImage){
	// 	currentImage.classList.add('active');
	// 	var imageId = currentImage.getAttribute('attr');
	// 	if(imageId > counter){
	// 	slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
	// 	counter = imageId;
	// 	slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
	// 	}
	// 	else if(imageId == counter){
	// 		return;
	// 	}
	// 	else{
	// 	slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
	// 	counter = imageId;
	// 	slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';	
	// 	}
	// 	indicators();
        
	// }
	document.addEventListener('DOMContentLoaded', () => {
    const slideImages = document.querySelectorAll('.slides img');
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    const dots = document.querySelectorAll('.dot');

    let counter = 0;
    let deletInterval;

    // Function to update the active dot
    function updateIndicators() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === counter);
        });
    }

    // Code for next button
    function slideNext() {
        console.log("Next button clicked");
        if (slideImages.length === 0) return;
        slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
        counter = (counter + 1) % slideImages.length;
        slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
        updateIndicators();
    }

    // Code for prev button
    function slidePrev() {
        console.log("Prev button clicked");
        if (slideImages.length === 0) return;
        slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
        counter = (counter - 1 + slideImages.length) % slideImages.length;
        slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
        updateIndicators();
    }

    // Auto sliding
    function startAutoSliding() {
        deletInterval = setInterval(slideNext, 3000);
    }

    // Stop auto sliding when mouse is over
    function stopAutoSliding() {
        clearInterval(deletInterval);
    }

    // Resume sliding when mouse is out
    function resumeAutoSliding() {
        startAutoSliding();
    }

    // Add event listeners
    if (next && prev) {
        next.addEventListener('click', slideNext);
        prev.addEventListener('click', slidePrev);
    } else {
        console.error('Next or Prev button not found');
    }

    const container = document.querySelector('.slide-container');
    if (container) {
        container.addEventListener('mouseover', stopAutoSliding);
        container.addEventListener('mouseout', resumeAutoSliding);
    } else {
        console.error('Slide container not found');
    }

    // Initial setup
    startAutoSliding();
    updateIndicators();

    // Add click event to the indicator
    function switchImage(currentImage) {
        const imageId = parseInt(currentImage.getAttribute('attr'));
        if (imageId !== counter) {
            if (imageId > counter) {
                slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
                counter = imageId;
                slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
            } else {
                slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
                counter = imageId;
                slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
            }
            updateIndicators();
        }
    }

    // Attach click events to dots
    dots.forEach(dot => {
        dot.addEventListener('click', () => switchImage(dot));
    });
});


</script>
</body>
</html>
<?php
echo '<link href="./assets/css/gallery.css" rel="stylesheet"/>';
echo '<link rel="icon" href="./assets/icon/favicon.ico" />';
?>
<div id="preloader">
    <div class="loader JS_on">
        <span class="binary"></span>
        <span class="binary"></span>
        <span class="binary"></span>
        <span class="getting-there">welcome...</span>
    </div>
</div>
<h2 class="heading">Purna Drive Gallery</h2>
<div class="slider-wrapper">
    <div class="slider-container">
        <?php
        $dir = opendir(("uploads/"));
        while (($file = readdir($dir)) !== false) {
            if ($file == '.' || $file == '..') {
                continue;
            }
        ?>
            <div class="image">
                <img class="slider-image" src="uploads/<?php echo $file ?>" style="cursor:pointer;" />
                <div class="button-background">
                    <a href="deleteImage.php?file=<?php echo $file ?>">
                        <button class="delete">
                            <svg viewBox=" 0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="none">
                                <path fill="#ff0000" d="M16.773 10.083a.75.75 0 00-1.49-.166l1.49.166zm-1.535 7.027l.745.083-.745-.083zm-6.198 0l-.745.083.745-.083zm-.045-7.193a.75.75 0 00-1.49.166l1.49-.166zm5.249 7.333h-4.21v1.5h4.21v-1.5zm1.038-7.333l-.79 7.11 1.491.166.79-7.11-1.49-.166zm-5.497 7.11l-.79-7.11-1.49.166.79 7.11 1.49-.165zm.249.223a.25.25 0 01-.249-.222l-1.49.165a1.75 1.75 0 001.739 1.557v-1.5zm4.21 1.5c.892 0 1.64-.67 1.74-1.557l-1.492-.165a.25.25 0 01-.248.222v1.5z" />
                                <path fill="#ff0000" fill-rule="evenodd" d="M11 6a1 1 0 00-1 1v.25H7a.75.75 0 000 1.5h10a.75.75 0 000-1.5h-3V7a1 1 0 00-1-1h-2z" clip-rule="evenodd" style="animation:rotate-tr 1s cubic-bezier(1,-.28,.01,1.13) infinite alternate-reverse both;transform-origin:right center" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="slider-controls">
        <span class="slider-control-left" onclick="moveSlider(-1)">&#10094;</span>
        <span class="slider-control-right" onclick="moveSlider(1)">&#10095;</span>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    setTimeout(function() {
        $('#preloader').fadeToggle();
    }, 1200);


    let currentSlide = 1;
    const slides = document.querySelectorAll(".slider-wrapper img");
    const sliderControls = document.querySelectorAll(
        ".slider-control-left, .slider-control-right"
    );

    // Show the first slide
    slides[currentSlide - 1].style.display = "block";

    // Move to the next or previous slide
    function moveSlider(n) {
        showSlide((currentSlide += n));
    }

    // Show the current slide and hide the rest
    function showSlide(n) {
        if (n > slides.length) {
            currentSlide = 1;
        }
        if (n < 1) {
            currentSlide = slides.length;
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[currentSlide - 1].style.display = "block";
    }

    // Add click event listener to the slider controls
    sliderControls.forEach((control) => {
        control.addEventListener("click", (event) => {
            if (event.target.classList.contains("slider-control-left")) {
                moveSlider(-1);
            } else if (event.target.classList.contains("slider-control-right")) {
                moveSlider(1);
            }
        });
    });

    // Add keyboard navigation
    document.addEventListener("keydown", (event) => {
        if (event.key === "ArrowLeft") {
            moveSlider(-1);
        } else if (event.key === "ArrowRight") {
            moveSlider(1);
        }
    });
</script>
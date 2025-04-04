<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<div class="container" id="cntnr">

    
</div>

<button id="scrollToTopBtn" class="scroll-to-top-btn"></button>

<!-- Scroll to Top Button Script -->
<script>
const scrollToTopButton = document.querySelector(".scroll-to-top-btn");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        scrollToTopButton.classList.add("show");
    } else {
        scrollToTopButton.classList.remove("show");
    }
});

scrollToTopButton.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>

<!-- Fade-in Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.container').classList.add('fade-in');
});

var container = document.getElementById("cntnr");
container.style.opacity = 1;
</script>

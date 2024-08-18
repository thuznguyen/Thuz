let slideIndex = 0;
showSlides(slideIndex);

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    
    // Nếu chỉ số vượt quá số slide, quay về slide đầu tiên
    if (n >= slides.length) {
        slideIndex = 0;
    }
    
    // Nếu chỉ số nhỏ hơn 0, quay về slide cuối cùng
    if (n < 0) {
        slideIndex = slides.length - 1;
    }

    // Ẩn tất cả các slide
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Hiển thị slide hiện tại
    slides[slideIndex].style.display = "block";
}

document.addEventListener('DOMContentLoaded', function(){
let slides=document.querySelectorAll('.hero-slider .slide');
let currentSlide=0;
const totalSlides=slides.length;

function showSlide(index){
    slides.forEach((slide, i)=>{
        slide.classList.toggle('active',i===index);
        });
}

function nextSlide(){
    currentSlide=(currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}
showSlide(currentSlide);
setInterval(nextSlide, 3000);
});
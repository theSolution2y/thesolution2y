const ham = document.querySelector("#hamburger");
const upslide = document.querySelector(".up_slide");
const rightslide = document.querySelector(".right_slide")
ham.addEventListener("click", menu);

function menu() {
    upslide.classList.toggle("active");
    rightslide.classList.toggle("active");
}
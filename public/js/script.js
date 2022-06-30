// {{-- ((((((((((slider section javascript)))))))))) --}}
let slide = document.querySelectorAll('.slide_container');
let count = document.getElementById('counter')
let indux = 0;

function next() {
    slide[indux].classList.remove('active');
    indux = (indux + 1) % slide.length;
    let heading = document.getElementsByTagName('h3')[indux].innerText;
    countSlides(heading);
    console.log("Indux on next = " + slide.length)
    slide[indux].classList.add('active');
}
function prev() {
    slide[indux].classList.remove('active');
    indux = (indux - 1 + slide.length) % slide.length;
    slide[indux].classList.add('active');
    let heading = document.getElementsByTagName('h3')[indux].innerText;
    countSlides(heading);
}
function countSlides(heading) {
    console.log("Indux = " + heading);
    $('#counter').html(indux + 1 + ' / ' + ' 0' + slide.length + ' | ' + heading);
}





$(document).ready(function () {
$(".post_wrapper").slick({
slidesToShow: 3,
slidesToScroll: 1,
autoplay: false,
centerMode:true,
centerPadding:'0',
// autoplaySpeed: 2000,
nextArrow: $(".next"),
prevArrow: $(".prev"),
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

});


// const slider = document.querySelectorAll('.post_info');
// const btns = document.getElementsByTagName('active');
// for (let i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   let current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace("active", "");
//   this.className += "active";
//   });
// }

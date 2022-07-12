// {{-- ((((((((((slider section javascript)))))))))) --}}
let slide = document.querySelectorAll(".slide_container");
let count = document.getElementById("counter");
let indux = 0;

function next() {
    slide[indux].classList.remove("active");
    indux = (indux + 1) % slide.length;
    let heading = document.getElementsByTagName("h3")[indux].innerText;
    countSlides(heading);
    console.log("Indux on next = " + slide.length);
    slide[indux].classList.add("active");
}
function prev() {
    slide[indux].classList.remove("active");
    indux = (indux - 1 + slide.length) % slide.length;
    slide[indux].classList.add("active");
    let heading = document.getElementsByTagName("h3")[indux].innerText;
    countSlides(heading);
}
function countSlides(heading) {
    console.log("Indux = " + heading);
    $("#counter").html(
        indux + 1 + " / " + " 0" + slide.length + " | " + heading
    );
}

$(document).ready(function () {
    $(".post_wrapper").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        centerMode: true,
        centerPadding: "0",
        // autoplaySpeed: 2000,
        nextArrow: $(".next"),
        prevArrow: $(".prev"),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
});

// javascript for search bar

const text = document.getElementById('text');
const originalText = text.innerHTML
const input = document.getElementById('input');
const button = document.getElementById('icon');
function highlightWords(){
    var keyword = document.getElementById("input");
let words = keyword.value;
var word = words,
    queue = [document.body],
    curr;
while (curr = queue.pop()) {
    if (!curr.textContent.toUpperCase().match(word.toUpperCase())) continue;
    for (var i = 0; i < curr.childNodes.length; ++i) {
        switch (curr.childNodes[i].nodeType) {
            case Node.TEXT_NODE: // 3
                if (curr.childNodes[i].textContent.toUpperCase().match(word.toUpperCase())) {
                    console.log("Found!");
                    console.log(curr);
                    curr.style.color = "red";
                    curr.style.textDecoration = "underline";
                    curr.scrollIntoView();
                }
                break;
            case Node.ELEMENT_NODE: // 1
                queue.push(curr.childNodes[i]);
                curr.style.color="red";
                break;
        }
    }
}

}
button.addEventListener('click', highlightWords);
// end javascript for search bar

// javascript and jQuery for our services home page

$(function () {
    $("#tabs-nav a").click(function (event) {
        event.preventDefault();
        $("#tabs-nav a").removeClass("tabs-menu-active");
        $(this).addClass("tabs-menu-active");
        $(".tabs-panel").removeClass("animated-tabs bounceIn").hide();
        var tab_id = $(this).data("target");
        $("#" + tab_id)
            .addClass("animated-tabs bounceIn")
            .show();
    });
});

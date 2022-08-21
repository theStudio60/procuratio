"use strict";

var isTouch = 'ontouchstart' in window || navigator.maxTouchPoints;

if (isTouch) {
    document.body.classList.add('isTouch'); //  document.getElementById("masthead").classList.remove("header");
    //  document.getElementById("masthead").classList.remove("header-mobile");
}

; //AOS.init();

AOS.init({
    disable: 'mobile',
    debounceDelay: 1500,
    // offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 800, // values from 0 to 3000, with step 50ms
    easing: 'ease-in-out', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: true // whether elements should animate out while scrolling past them

});

function openMenu() {
    document.getElementById("overlayMenu").classList.remove("mobile-menu--hidden");
    document.getElementById("overlayMenu").classList.add("mobile-menu--visible");
    document.getElementById("burger").classList.remove("header-mobile__burger--visible");
    document.getElementById("burger").classList.add("header-mobile__burger--hidden");
    document.getElementById("close").classList.remove("header-mobile__burger--hidden");
    document.getElementById("close").classList.add("header-mobile__burger--visible");
    preventScroll();
}

function closeMenu() {
    document.getElementById("overlayMenu").classList.remove("mobile-menu--visible");
    document.getElementById("overlayMenu").classList.add("mobile-menu--hidden");
    document.getElementById("burger").classList.remove("header-mobile__burger--hidden");
    document.getElementById("burger").classList.add("header-mobile__burger--visible");
    document.getElementById("close").classList.remove("header-mobile__burger--visible");
    document.getElementById("close").classList.add("header-mobile__burger--hidden");
    enableScroll();
}

var popupAlert = document.querySelector('.popup'); // window.onload = function() {
//popupAlert.classList.add("popup--visible");
//};

function closePopup() {
    popupAlert.classList.remove("popup--visible");
    popupAlert.classList.add("popup--hidden");
}

$('.hero-slider').slick({
    //*
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    // centerMode: false //*/ 
    slidesToShow: 1,

    //autoplaySpeed: 0,
    speed: 4000,
    cssEase: 'linear',
    infinite: true,
    //focusOnSelect: true,

    responsive: [{
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1,
                speed: 5000,
            }
        }]
        //*/

});

document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll(".mobile-menu li a:not([href='#'])");

    for (var x = 0; x < links.length; x++) {
        links[x].onclick = function() {
            console.log(links[x]);
            closeMenu();
        };
    }
});

function preventScroll() {
    // Get the current page scroll position 
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft; // if any scroll is attempted, set this to the previous value 

    window.onscroll = function() {
        window.scrollTo(scrollLeft, scrollTop);
    }; //    window.addEventListener("wheel", function(e) { e.preventDefault(); }, { passive: false });

}

;

function enableScroll() {
    window.onscroll = function() {};
}

;
document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });
        lazyloadImages.forEach(function(image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyload = function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function() {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function(img) {
                    if (img.offsetTop < window.innerHeight + scrollTop) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });

                if (lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        };

        var lazyloadThrottleTimeout;
        lazyloadImages = document.querySelectorAll(".lazy");
        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    }
});
var scrollToTopBtn = document.querySelector(".button--scrollToTop");
var rootElement = document.documentElement;

function handleScroll() {
    // Do something on scroll
    var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;

    if (rootElement.scrollTop / scrollTotal > 2.50) {
        // Show button
        scrollToTopBtn.classList.add("showBtn");
    } else {
        // Hide button
        scrollToTopBtn.classList.remove("showBtn");
    }
}

function scrollToTop() {
    // Scroll to top logic
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

scrollToTopBtn.addEventListener("click", scrollToTop);
document.addEventListener("scroll", handleScroll);



var droppers = document.querySelectorAll('.dropper');
for (var x = 0; x < droppers.length; x++) {
    droppers[x].onclick = function() {
        var dropID = this.id.slice(-2);
        var target = document.getElementById('target-' + dropID + '');
        var arrow = document.getElementById('arrow-' + dropID + '');
        target.classList.toggle('d-block');
        target.classList.toggle('d-none');
        target.classList.toggle('dropdown');
        arrow.classList.toggle('arrow-rotate');
        console.log(arrow);

    };
}




$(document).ready(function() {
    $(window).scroll(function() {
        /*
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
            $(".header").css("background", "rgba(0, 35, 105, 1)");
        } else {
            $(".header").css("background", "rgba(0, 35, 105, 0);");
        }
        //*/
        var scroll = $(window).scrollTop();
        if (scroll == $(window).height()) {
            $(".header").css({ "background-color": "rgba(0, 35, 105, 0)" });
            $(".header").css({ "height": "128px" });
            $(".header").css({ "border-bottom": "1px solid rgba(255, 255, 255, 0)" });
            $("#headerBrand").css({ "height": "72px" });
            $("#headerBrand").css({ "margin-left": "0px" });
            //
            //$("#headerBrand").css({})
            //
        }
        if (scroll > 300) {
            $(".header").css({ "background-color": "rgba(0, 35, 105, 1)" });
            $(".header").css({ "height": "80px" });
            $(".header").css({ "border-bottom": "1px solid rgba(255, 255, 255, 1)" });
            $("#headerBrand").css({ "height": "48px" });
            $("#headerBrand").css({ "margin-left": "0px" });



        } else {
            $(".header").css({ "background-color": "rgba(0, 35, 105, 0)" });
            $(".header").css({ "height": "128px" });
            $(".header").css({ "border-bottom": "1px solid rgba(255, 255, 255, 0)" });
            $("#headerBrand").css({ "height": "72px" });
            $("#headerBrand").css({ "margin-left": "0px" });



        }


    })
})



//rgba(0, 35, 105, 1)
//background: rgba(255, 255, 255, 0);
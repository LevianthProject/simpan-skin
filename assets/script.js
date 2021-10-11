// Navbar Scripts

var prevScrollHandler = undefined;
//function adds class to header after scrolling past hero in order make header appear 
function setScrollEventListener(init) {
    var shrinkOn = document.getElementById("hero").offsetHeight - 51,
        header = document.getElementById("headerid"),
        navFixed = (window.pageYOffset > shrinkOn) ? true : false;

    var scrollHandler = function (event) {
        var scrollPos = event.target.scrollingElement.scrollTop;
        // set navFixed
        if (scrollPos > shrinkOn && !navFixed) {
            navFixed = true;
        } else if (scrollPos < shrinkOn && navFixed) {
            navFixed = false;
        } else {}
        if (navFixed) {
            if (!(header.classList.contains("smaller"))) {
                header.classList.add("smaller");
            } else {}
        } else {
            if (header.classList.contains("smaller")) {
                header.classList.remove("smaller");
            } else {}
        }
    }
    if (!init && prevScrollHandler) {
        window.document.removeEventListener('scroll', prevScrollHandler);
    }
    window.document.addEventListener('scroll', scrollHandler);
    prevScrollHandler = scrollHandler;
};
//toggle mobile menu function
function toggleActive() {
    var toggle = document.getElementById("toggle-button");
    var nvOverlay = document.querySelector("#nvOverlay");
    toggle.classList.toggle("active")
    nvOverlay.classList.toggle("open");
};

//fix height function for vh height divs intended to prevent page jumps on mobile devices 
function fixAllHeights() {
    var divs = document.getElementsByClassName('mobile-height-fix');
    for (var i = 0; i < divs.length; i++) {
        var divHeight = divs[i].offsetHeight;
        divs[i].style.height = divHeight.toString() + 'px';
    }
};

window.onload = function initFunc() {
    //check if in mobile browser 
    if (typeof window.orientation !== 'undefined') {
        fixAllHeights();
    }

    document.querySelector("#toggle-button").addEventListener("click", toggleActive);
    //close mobile menu
    if (document.documentElement.offsetWidth > 950) {
        setScrollEventListener(true);
    }
};

window.onresize = function resizeFunc() {
    if (document.documentElement.offsetWidth > 950 &&
        document.querySelector("#nvOverlay").classList.contains('open')) {
        toggleActive();
    }
    if (document.documentElement.offsetWidth > 950) {
        setScrollEventListener(false);
    }

};



// owl carousel init
function owlInitialize() {
    if ($(window).width() < 1140) {
        $('#slids').addClass("owl-carousel");
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 20,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                },
                480: {
                    items: 2,
                }
            }
        });
    } else {
        $('.owl-carousel').owlCarousel('destroy');
        $('#slids').removeClass("owl-carousel");
    }
}
$(document).ready(function (e) {
    owlInitialize();
});
$(window).resize(function () {
    owlInitialize();
});
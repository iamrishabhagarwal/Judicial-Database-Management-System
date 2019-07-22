// javascript Animate onscroll Start
$(document).ready(function () {
    if (screen.width > 1024) {
        AOS.init({
            easing: 'ease-in-out-sine',
            once: true,
        });
    }
});
$(document).ready(function () {
    pagenum = 1;

    function AutoRotate() {
        var myele = null;
        var allElements = document.getElementsByTagName('label');
        for (var i = 0, n = allElements.length; i < n; i++) {
            var myfor = allElements[i].getAttribute('for');
            if ((myfor !== null) && (myfor == ('slide_2_' + pagenum))) {
                allElements[i].click();
                break;
            }
        }
        if (pagenum == 4) {
            pagenum = 1;
        } else {
            pagenum++;
        }
    }
    setInterval(AutoRotate, 5000);
});
// ===== Scroll to Top ==== 
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});
$('#return-to-top').click(function () {
    // When arrow is clicked

    $('body, html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});

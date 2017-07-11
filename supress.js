

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});



<script type="text/javascript">
var r1=document.getElementById("r1"); //get span to apply rainbow
//var myRainbowSpan=new RainbowSpan(r1, 0, 360, 255, 50, 18); //apply static rainbow effect
//myRainbowSpan.timer=window.setInterval("myRainbowSpan.moveRainbow()", myRainbowSpan.speed);

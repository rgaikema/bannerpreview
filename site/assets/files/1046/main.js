window.onload = function() {

    var container = document.getElementById('container'),
        bgImage = document.getElementById('bg_image'),
        GrnRect1 = document.getElementById('grn_rect1'),
        GrnRect2 = document.getElementById('grn_rect2'),
        GrnRect3 = document.getElementById('grn_rect3'),
        titel = document.getElementById('titel'),
        btn = document.getElementById('btn'),
        logo = document.getElementById('logo'),
        owlCarousel = document.getElementById('owl-carousel'),
        tl = new TimelineMax({ delay: 1});

container.addEventListener('click', function(){
        ExitApi.exit()
      }); 

    tl  
        .set(owlCarousel, {opacity: 0})
        .to(container, 0.5, {opacity: 1})
        .to(bgImage, 0.5, {opacity: 1})
        .to(logo, 0.5, {opacity: 1}, '=-0.9')
        .fromTo(GrnRect1, 0.5, {x: -150, opacity: 0}, {x: 0, opacity: 1}, '=-.5')
        .fromTo(GrnRect2, 0.5, {x: -150, opacity: 0}, {x: 0, opacity: 1}, '=-.5')
        .fromTo(GrnRect3, 0.5, {x: -150, opacity: 0}, {x: 0, opacity: 1}, '=-.5')
        .fromTo(titel, 0.5, {x: -80, opacity: 0}, {x: 0, opacity: 1}, '=-0.5')
        .to(owlCarousel, 0.5, {opacity: 1})
        .to(btn, 0.5, {opacity: 1})

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items:1,
    loop: true,
    autoplay: true,
    nav: false
  });
});

var owl = $('#owl-carousel');
$('#next').click(function(){
    console.log('volgende')
   owl.trigger('next.owl.carousel');
})
$('#prev').click(function(){
    console.log('vorige')
   owl.trigger('prev.owl.carousel');
})


    container.addEventListener("mouseenter", function() {
            btn.style.backgroundColor = "#f29c35";
            TweenMax.to(bgImage, 0.5, {scale: 1.07});

    });

    container.addEventListener("mouseleave", function() {   
            btn.style.backgroundColor = "#ef8302"; 
            TweenMax.to(bgImage, 0.5, {scale: 1});
    });



}
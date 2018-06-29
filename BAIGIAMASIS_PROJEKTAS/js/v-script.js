$(document).ready(function(){
  $('.carousel.carousel-slider').carousel({
    dist: -50,
    indicators: true,
    fullWidth: false
  });
});

$('.moveNextCarousel').click(function(e){
     e.preventDefault();
     e.stopPropagation();
     $('.carousel').carousel('next');
  });

  $('.movePrevCarousel').click(function(e){
     e.preventDefault();
     e.stopPropagation();
     $('.carousel').carousel('prev');
  });

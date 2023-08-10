$(".flexslider").flexslider({
  animation: "slide", 
  slideshow: true,
  touch: true,
  keyboard: true,
  pauseOnHover: true,
  after: function(item){
    console.log(item);
  }
 // animationLoop: false
});
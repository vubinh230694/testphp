$(function() {
    $('.slider img:gt(0)').hide();
    setInterval(function(){
      $('.slider :first-child').fadeOut(8000)
         .next('img').fadeIn(8000)
         .end().appendTo('.slider');}, 
      8000);
})

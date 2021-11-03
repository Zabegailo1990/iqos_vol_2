$(document).ready(function(){
  $('.accordion__title').click(function(){
    $(this).parent().toggleClass('active')
    $(this).next().slideToggle(300); 
  });
});

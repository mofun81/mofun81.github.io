$(function(){
  $('#text1').hover(
    function() {
      $('#text2').fadeIn();
    },
    function() {
      $('#text2').fadeOut();
    }
  );
});

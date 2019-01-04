$(function() {
  //言語変換　日本語　->　英語
  $("li").hover(function(){
      $(this).find(".overlay").css('opacity','0.3');
  },function(){
      $(this).find(".overlay").css('opacity','0.8');
  });
});

$(function() {
  //言語変換　日本語　->　英語
  $(".langEng").click(function(){
    var url = location.href;
      if(url.indexOf('.html') !== -1){
      url = url.replace(".html","");
      $(".langEng").attr("href",url + "_eng.html");
    }else {
      $(".langEng").attr("href",url + "index_eng.html");
    }
  });
  //言語変換　英語　->　日本語
  $("#langJp").click(function(){
    var url = location.href;
    if(url.indexOf('.html') !== -1){
      url = url.replace("_eng","");
      $("#langJp").attr("href",url);
    }else {
      $("#langJp").attr("href",url + "index.html");
    }
  });
});

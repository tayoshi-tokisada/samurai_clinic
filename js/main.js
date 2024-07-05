// トップへ戻るボタン
$(window).on("scroll", function(){
  let url = `${window.location.origin}/html/voice.html`;
  // url = encodeURIComponent(url);
  console.log(url);
  // window.location.href = "http://127.0.0.1:5500/html/voice.html";
  const scrollValue = document.scrollingElement.scrollTop;

  if(scrollValue >= 300){
    $("#backToTopBtn").css("bottom", "min(20vw, 100px)");
    $("#backToTopBtn").css("opacity", "1");
  }
  else{
    $("#backToTopBtn").css("bottom", "-80px");
    $("#backToTopBtn").css("opacity", "0");
  }
});
$("#backToTopBtn").on("click", function(){
  let position = $("header").offset().top;
  let speed = 600;
  $("html, body").animate({scrollTop:position}, speed);
});
// トップへ戻るボタン
$(window).on("scroll", function(){
  const scrollValue = document.scrollingElement.scrollTop;

  if(scrollValue >= 300){
    $("#backToTopBtn").css("bottom", "100px");
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

$(function(){
  // カルーセル
  $(".topCarousel").slick({
    autoplay: true,
    dots: false,
    infinite: true,
    autoplaySpeed: 5000,
    arrows: false,
    slidesToShow: 1,
  });
  $(".bottomCarousel").slick({
    autoplay: true,
    dots: false,
    infinite: true,
    autoplaySpeed: 5000,
    arrows: false,
    slidesToShow: 1,
  });
})
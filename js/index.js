// カルーセル
$(function(){
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
// SP用メニューボタン押下時
$("#menu-sp").on("click", function(){
  // SP用navを表示する
  $("#nav-sp").css("display", "block");
});

// SP用メニュークローズボタン押下時
$("#menuClose").on("click", function(){
  // SP用navを非表示にする
  $("#nav-sp").css("display", "none");
});

// 画面幅変更時
$(window).on("resize", function(){
  // SP用navを非表示にする
  $("#nav-sp").css("display", "none");
});
// トップへ戻るボタン
$(window).on("scroll", function(){
  let url = `${window.location.origin}/html/voice.html`;
  // url = encodeURIComponent(url);
  console.log(url);
  // window.location.href = "http://127.0.0.1:5500/html/voice.html";
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

  // お悩み選択肢placeholder設定
  if($("#trouble").attr("placeholder")){
    $("#trouble").append(`<option value="" disabled selected style="display: none;">${$("#trouble").attr("placeholder")}</option>`);
    $("#trouble").on("change", function(){
      if($(this).val() == ""){
        $(this).css("color", "rgba(0,0,0,0.36)")
      }
      else{
        $(this).css("color", "rgba(0,0,0,1)")
      }
    });
  }
  else{
    $(this).css("color", "rgba(0,0,0,1)")
  }

  // 送信ボタンクリック時
  $("#submit").on("click", function(e){
    let arr_alertMsg = [];
    let isValid = true;

    if($("#name").val() == ""){
      arr_alertMsg.push("名前を入力してください。");
      isValid = false;
    }

    if($("#furigana").val() == ""){
      arr_alertMsg.push("フリガナを入力してください。");
      isValid = false;
    }

    if($("#tel").val() == ""){
      arr_alertMsg.push("電話番号を入力してください。");
      isValid = false;
    }

    if($("#mailAddress").val() == ""){
      arr_alertMsg.push("メールアドレスを入力してください。");
      isValid = false;
    }

    if($("[name='trouble']").prop("value") == ""){
      arr_alertMsg.push("お悩みを選択してください。");
      isValid = false;
    }

    if(!isValid){
      let alertMsg = arr_alertMsg.join("\n");
      alert(alertMsg);
      e.preventDefault();
      return false;
    }

    return true;
  });
})
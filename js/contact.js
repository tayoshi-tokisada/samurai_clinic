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
  // バリデーションチェック
  let arr_alertMsg = [];
  let isValid = true;

  // 名前
  // 入力チェック
  if($("#name").val() == ""){
    arr_alertMsg.push("名前を入力してください。");
    isValid = false;
  }

  // フリガナ
  // 入力チェック
  if($("#furigana").val() == ""){
    arr_alertMsg.push("フリガナを入力してください。");
    isValid = false;
  }

  // 電話番号
  const telPattern = /^[0-9]+$/;
  // 入力チェック
  if($("#tel").val() == ""){
    arr_alertMsg.push("電話番号を入力してください。");
    isValid = false;
  }
  // 入力形式チェック
  else if(!telPattern.test($("#tel").val())){
    arr_alertMsg.push('電話番号の入力形式が正しくありません。');
    isValid = false;
  }

  // メールアドレス
  const emailPattern = /^[a-zA-Z0-9.@]+$/;
  // 入力チェック
  if($("#mailAddress").val() == ""){
    arr_alertMsg.push("メールアドレスを入力してください。");
    isValid = false;
  }
  // 入力形式チェック（使える記号は.と@のみとする）
  else if(!emailPattern.test($("#mailAddress").val())){
    arr_alertMsg.push('メールアドレスの入力形式が正しくありません。');
    isValid = false;
  }

  // お悩み
  // 入力チェック
  if($("[name='trouble']").prop("value") == ""){
    arr_alertMsg.push("お悩みを選択してください。");
    isValid = false;
  }

  // エラーがあれば
  if(!isValid){
    // 画面に表示
    let alertMsg = arr_alertMsg.join("\n");
    alert(alertMsg);

    // フォームの送信を中止
    e.preventDefault();
    return false;
  }

  return true;
});
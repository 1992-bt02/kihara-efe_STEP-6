document.addEventListener("DOMContentLoaded", function () {
  const button = document.getElementById("changeColorBtn");
  const main = document.getElementById("main-section"); // ← mainにidが必要！
  const footer = document.getElementById("page-footer");
  const form = document.querySelector("form"); // 最初の<form>を取得
  const requiredFields = form.querySelectorAll("input[required], textarea[required]");

  const colors = ["lightblue", "lightcoral", "lightyellow", "lightgray"];
  let index = 0;

  button.addEventListener("click", function () {
    main.style.backgroundColor = colors[index];
    index = (index + 1) % colors.length;

    // footerの色を固定する処理（必要ないなら削除可）
    footer.style.backgroundColor = "#d3d3d3";
  });

  
  form.addEventListener("submit", function (event) {
    for (const field of requiredFields) {
      if (!field.value.trim()) {
        alert("未入力の項目があります。すべて入力してください。");
        field.focus(); // 最初の未入力欄にフォーカス
        event.preventDefault(); // 送信キャンセル
        return;
      }
    }
  });
});
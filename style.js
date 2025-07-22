document.addEventListener("DOMContentLoaded", function () {
  const button = document.getElementById("changeColorBtn");
  const main = document.getElementById("main-section"); // ← mainにidが必要！
  const footer = document.getElementById("page-footer");

  const colors = ["lightblue", "lightcoral", "lightyellow", "lightgray"];
  let index = 0;

  button.addEventListener("click", function () {
    main.style.backgroundColor = colors[index];
    index = (index + 1) % colors.length;

    // footerの色を常に固定
    footer.style.backgroundColor = "#d3d3d3";
  });
});
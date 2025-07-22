<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>お問い合わせフォーム</header>

  <div class="container">
    <aside>
      <ul>
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめの商品</a></li>
        <li><a href="#">エンジニアおすすめの記事</a></li>
        <li><a href="#">投稿ページ</a></li>
      </ul>
    </aside>

    <main id="main-section">
      <form action="confirm.php" method="post">
        <table>
          <tr>
            <td>お名前</td>
            <td><input type="text" name="name" required></td>
          </tr>
          <tr>
            <td>会社名</td>
            <td><input type="text" name="company" required></td>
          </tr>
          <tr>
            <td>メールアドレス</td>
            <td><input type="email" name="email" required></td>
          </tr>
          <tr>
            <td>年齢</td>
            <td><input type="text" name="age" required></td>
          </tr>
          <tr>
            <td>お問い合わせ内容</td>
            <td><textarea name="message" placeholder="お問い合わせ内容を入力してください"></textarea></td>
          </tr>
        </table>
        <div class="buttons">
          <input type="submit" value="送信">
        </div>
      </form>
    </main>
  </div>

  <footer id="page-footer">
    横のボタンを押すとfooterの背景色が変わります。
  </footer>

  <div class="footer-button-area">
    <button id="changeColorBtn">押してみてね！</button>
  </div>

  <script src="style.js"></script>
</body>
</html>
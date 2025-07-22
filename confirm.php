<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ確認画面</title>
  <link rel="stylesheet" href="style.css">
  <?php
// フォーム以外からのアクセスはリダイレクト
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: contact.php");
  exit;
}

// バリデーション：空欄チェック
$errors = [];

if (empty($_POST["name"])) {
  $errors[] = "お名前が入力されていません。";
}
if (empty($_POST["email"])) {
  $errors[] = "メールアドレスが入力されていません。";
}
if (empty($_POST["message"])) {
  $errors[] = "お問い合わせ内容が入力されていません。";
}

// エラーがある場合は表示
if (count($errors) > 0) {
  foreach ($errors as $error) {
    echo "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
  }
  echo "<a href='contact.php'>戻る</a>";
  exit;
}
?>
</head>
<body>
  <header>お問い合わせフォーム・確認画面</header>

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

    <main>
      <form action="send.php" method="post">
        <table>
          <tr><td>お名前</td><td><?= htmlspecialchars($_POST['name']) ?></td></tr>
          <tr><td>会社名</td><td><?= htmlspecialchars($_POST['company']) ?></td></tr>
          <tr><td>メールアドレス</td><td><?= htmlspecialchars($_POST['email']) ?></td></tr>
          <tr><td>年齢</td><td><?= htmlspecialchars($_POST['age']) ?></td></tr>
          <tr><td>お問い合わせ内容</td><td><?= nl2br(htmlspecialchars($_POST['message'])) ?></td></tr>
        </table>
        <input type="hidden" name="name" value="<?= htmlspecialchars($_POST['name']) ?>">
<input type="hidden" name="company" value="<?= htmlspecialchars($_POST['company']) ?>">
<input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email']) ?>">
<input type="hidden" name="age" value="<?= htmlspecialchars($_POST['age']) ?>">
<input type="hidden" name="message" value="<?= htmlspecialchars($_POST['message']) ?>">
        <div class="buttons">
          <button type="button" onclick="history.back()">戻る</button>
          <br><br>
          <input type="submit" value="送信">
        </div>
      </form>
    </main>
  </div>
</body>
</html>
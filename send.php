<?php
// フォーム以外からのアクセスは contact.php にリダイレクト
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: contact.php");
  exit;
}

// 入力値をエスケープ
$name = htmlspecialchars($_POST['name'] ?? '');
$company = htmlspecialchars($_POST['company'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$age = htmlspecialchars($_POST['age'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

// メール送信設定
$to = "your@example.com"; // ← 自分のメールアドレスに書き換えてね
$subject = "お問い合わせがありました";
$body = <<<EOT
以下の内容でお問い合わせがありました。

【お名前】$name
【会社名】$company
【メールアドレス】$email
【年齢】$age
【お問い合わせ内容】
$message
EOT;

$headers = "From: $email";

// メール送信処理
$success = mb_send_mail($to, $subject, $body, $headers);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ完了</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #ffffff;
      text-align: center;
      padding: 60px 20px;
    }
    h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 30px;
    }
    p {
      font-size: 16px;
      margin-bottom: 30px;
    }
    a {
      display: inline-block;
      font-size: 16px;
      color: #4A4AFF;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h1>お問い合わせフォーム - 送信完了画面</h1>
  <?php if ($success): ?>
    <p>お問い合わせが送信されました。ありがとうございます！</p>
  <?php else: ?>
    <p style="color: red;">メールの送信に失敗しました。もう一度お試しください。</p>
  <?php endif; ?>
  <a href="contact.php">お問い合わせフォームに戻る</a>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>お問い合わせ確認</title>
</head>
<body>
  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      
      <?php
        echo $_POST['name'];      
      ?>
      <div class="form-item">■ email</div>
      
      <?php
        echo $_POST['email'];      
      ?>
      <div class="form-item">■ 内容</div>
      <?php
        echo $_POST['body'];
      
      ?>
    </div>

  </div>
</body>
</html>
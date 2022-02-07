<?php
  if (isset($_POST['upper'])) {
    // 大文字化
    $str = $_POST['upper'];
    $str = strtoupper($str);
    $text_value = $_POST['upper'];
    // 字数カウント
    $tel = $_POST['upper']; //入力した文字が入る
    $limit = 20; //字数制限値
    $errMsg = ''; //エラーメッセージ
    $stelLength = strlen($tel); //入力された文字数を取得する
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>大文字化</title>
</head>
<body>
  <form action="index.php" method="post">
    <!-- 入力した文字を残すために$text_valueを与えている -->
    <textarea name="upper" id="upper"  cols="30" rows="10" placeholder="20字以内で入力してね"><?php echo $text_value;?></textarea> 
    <div class="button-wrap">
      <input type="submit" value="変換する">
    </div>
  </form>
  <!-- result -->
  <div class="result">
    <textarea name="upper-result" id="upper-result" cols="30" rows="10"><?php
     if ($stelLength > $limit) {
      $errMsg = '20字以下で入力してね';
      echo $errMsg;
    } else {
        echo $str;
      }?></textarea>
  </div>
</body>
</html>
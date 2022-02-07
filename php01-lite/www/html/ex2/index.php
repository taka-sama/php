<?php 
  $text_value = $_POST['change_css']; //値を残すため
  // $str = "body{margin: 0;}h1{display: block;}p{padding: auto;margin: 0;display: flex;flex-wrap: nowrap;}";
  $str = $_POST['change_css'];
  $table = array(
  '{'=> " {\n ",
  '}'=> "\n}\n \n",
  ";"=> ";\n ",
  );
  $search = array_keys( $table);
  $replace = array_values( $table);
  $str_result = str_replace($search, $replace, $str);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>css整形</title>
</head>
<body>
  <form action="index.php" method="post" name="post_css">
    <textarea name="change_css" id="" cols="30" rows="10" type="submit"><?php
      echo $text_value; //値を残すため
    ?></textarea>
    <input type="submit" value="置換">
    <!-- 整形したいコードを変数に代入させて、それをstrposの引数に代入してみる -->
  </form>
  <div> <!---結果表示--->
    <textarea name="change_css" id="" cols="30" rows="10"><?php echo $str_result; ?></textarea>
  </div>
</body>
</html>
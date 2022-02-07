<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿機能</title>
</head>
<body>
  <h1>掲示板</h1>
  <form action="index.php" method="post">
    <p>message: <input name="message" type="text"></p>
    <p>user: <input name="user" type="text"></p>
    <input type="submit" value="投稿">
  </form>
  <?php
    // date_default_timezone_set('Asia/Tokyo');
    // $message = $_POST["message"];
    // $user = $_POST["user"];

    // print('<p>内容:'.$message.'</p>');
    // print('<p>投稿者:'.$user.'</p>');
    // echo date("Y/m/t") . "\n";

    $message = htmlspecialchars($_POST["message"], ENT_QUOTES);
    $user = htmlspecialchars($_POST["user"], ENT_QUOTES);
    $db = new PDO("mysql:host=localhost;dbname=keiji", "root", "");
    $db->query("INSERT INTO tb1 (no,name,messege,time)
            VALUES (NULL,'$a','$b',NOW())");

    $n = $db -> query("SELECT * FROM tb1 ORDER BY no DESC");
    while ($i = $n -> fetch()) {
      print "{$i['no']}: {$i['name']} {$i['time']}<br>"
      .nl2br($i['messege'])."<hr>";
    }
  ?>
</body>
</html>
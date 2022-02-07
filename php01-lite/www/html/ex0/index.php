<?php

 

//サイコロをふるPHPプログラム
$result = "";
if (isset($_POST['add'])) {
  $dice1 = rand(1, 6);
  
  $dice2 = rand(1, 6);
  
  $zorome = ($dice1 == $dice2) ? true : false;
  
  $goukei = $dice1 + $dice2;

}


 

?>

 

<!DOCTYPE html>

<html lang=”ja”>

<head>

<meta charset=”UTF-8″ />

<title>サイコロ</title>

</head>

<body>


  <p>サイコロ1の目は「<?php echo $dice1; ?>」でした。</p>

  <p>サイコロ2の目は「<?php echo $dice2; ?>」でした。</p>

  <?php if ($zorome) : ?>

  <p>ぞろ目！！</p>

  <?php endif; ?>

  <p>サイコロ1と2の合計は「<?php echo $goukei; ?>」でした。</p>

  <form action="index.php" method="post">
    <button type="submit" name="add">もう一回する</button>
  </form>

</body>

</html>
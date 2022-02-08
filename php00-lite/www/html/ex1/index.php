<?php
  date_default_timezone_set('Asia/Tokyo');
  echo date("Y/m/t") . "\n";

  //配列を使用し、要素順に(日:0〜土:6)を設定する
$week = [
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土', //6
];
 
$date = date('w');
 
//日本語で曜日を出力
echo $week[$date] . '曜日';
  
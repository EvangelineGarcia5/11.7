<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Таблица</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h1>11.7. Практика</h1>
 <?
 echo 'Задание 1. Таблица истинности PHP';
 ?>
    <?php

function debug($data){
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

//  Есть массив элементов, которые нужно вывести равномерно в четыре блока div
$arr = [
  'A',
  'B',
  '!A',
  'A||B',
  'A && B',
  'A xor B',
  '0',
  '0',
  '1',
  '0',
  '0',
  '0',
  '0',
  '1',
  '1',
  '1',
  '0',
  '1',
  '1',
  '0',
  '0',
  '1',
  '0',
  '1',
  '1',
  '1',
  '0',
  '1',
  '1',
  '0',
];

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container">
  <table class="table">
  <?php foreach( array_chunk($arr, 6) as $value): ?>
    <tr>
      <?php foreach($value as $item): ?>
        <td><?= $item ?></td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </table>
</div>


<?
 echo 'Задание 2. Таблица сравнения';

 ?>

<?php
 
$arr = array(
array('','true','false',1,0,'-1','"1"','null'),
array('true',1,0,1,0,0,1,0),
array('false',0,0,0,0,1,0,0),
array(1,1,0,1,0,0,1,0),
array(0,0,0,0,0,1,0,0),
array('-1',0,1,0,1,1,0,1),
array('"1"',1,0,1,0,0,1,0),
array('null',0,0,0,0,1,0,0)
);
 

echo '<table border=1 cellspacing=10 cellpadding=20>'.PHP_EOL; // PHP_EOL - символ перевода строки
 
foreach($arr as $value)
{
  echo '<tr>'.PHP_EOL;
   foreach($value as $e)
    {
     echo '<td>'.PHP_EOL.$e.'</td>'.PHP_EOL;
     }
  echo '</tr>'.PHP_EOL;
}
 
echo '</table>'.PHP_EOL;
 
?>


</body>
</html>
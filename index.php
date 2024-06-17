<?php

$id = '1KzX2hqyXfqqAEwkhwXEX6c-YQK2kiORFgqcSJ5jGL8w';
$gid = 0;
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Марка</th>
      <th scope="col">Модель</th>
      <th scope="col">Цена</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($array as $arr){
  $i++;
  $html .= '<tr>';
  $html .= '<td scope="row">'.$i.'</td>';
  foreach ($arr as $td) {
    $html .= '<td scope="col">'.$td.'</td>';
  }
  $html .= '';
}
echo $html;
    ?>
  </tbody>
</table>
  </body>
</html>

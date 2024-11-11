<?php
function okruglenie_massiva(array $array)
{
  foreach ($array as $i => $value)
  {
  $array [$i] = round($array [$i]);
  }
  print_r($array);
}
$array = [2.3, 2.6, 4.5, 7.1, 9.4, 3.9];
okruglenie_massiva($array);
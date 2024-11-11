<?php
function obrabotka_massiva(array $strings, string $bukva):array
{
  foreach ($strings as &$string)
  {
    if (strlen($string) >= 5)
    {
      $string = substr($string, 0, 5);// образаем массив, со смещением = 0 и длиной = 5
    }
    else { $string.=$bukva;}
  }
  unset($string);
  return $strings;
}
$array = ["Lala","OOO","LLLL","AAAA","LALALALAL"];
$bukva = "p";
$result_massive = obrabotka_massiva($array, $bukva);
print_r($result_massive);
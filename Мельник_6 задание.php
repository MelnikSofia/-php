<?php
function first_number(int $number)
{
  $str_number = (string)$number;
  if (strlen($str_number) > 0)
  {
  $arr = str_split($str_number);
  $first_number = $arr[0];
  echo "Первая цифра числа $number это $first_number ";
  }
  else {echo "Число не введено";}
}
$number = 1700000;
first_number($number);
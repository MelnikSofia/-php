<?php
function last_char(string $stroka)
{
  $len = strlen($stroka);
  $arr = str_split($stroka);
  if ($len!=0)
  {
  $last = $arr[$len - 1];
  echo "Последний символ строки `$stroka` это: $last";
  }
  else {echo "Строка не введена";}
}
$stroka = "LalalallllA";
last_char($stroka);
<?php
function str_lengh(string $stroka)
{
  $len = strlen($stroka);
  echo "Длина строки `$stroka` равна $len";
}
$stroka = "lalala";
str_lengh($stroka);
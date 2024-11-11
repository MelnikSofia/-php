<?php
function proverka_stroki(string $stroka)
{
  $len = strlen($stroka);
  $arr = str_split($stroka);
  if ($len > 1)
  {
  $prelast = $arr[$len - 2];
  echo "Предпоследний символ строки `$stroka` это: $prelast";
  }
  else {echo "Строка не введена, или в ней всего один символ";}
}
$stroka = "LalolAl";
proverka_stroki($stroka);
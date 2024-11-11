<?php
function sravnen_strok(string $stroka1, string $stroka2)
{
  $arr1 = str_split($stroka1);
  $arr2 = str_split($stroka2);
  
  $first_char1 = $arr1[0];
  $first_char2 = $arr2[0];
  
  if ($first_char1 == $first_char2 ) 
  {
    echo "Первые буквы слов `$stroka1` и `$stroka2` совпадают ";
  }
  else echo "Первые буквы слов `$stroka1` и `$stroka2` не совпадают ";
}
$stroka1 = "LALALAL";
$stroka2 = "LLLLLL";
sravnen_strok( $stroka1, $stroka2);
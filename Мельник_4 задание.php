<?php
function proverka_chetnosty(int $a) 
{
  if ($a % 2 == 0) { echo "Число $a четное";}
  else { echo "Число $a нечетное";}
}
proverka_chetnosty(10009);
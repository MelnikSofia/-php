<?php
function proverka_znaka(int $a) 
{
  if ($a < 0) { echo "Число `$a` отрицательное";}
  elseif ($a == 0){ echo "Число `$a` равно нулю";}
  else { echo "Число `$a` положительное";}
}
proverka_znaka(1000);
<?php

$result = array(1,2);

$num = 3;

while ($num <= 20) {

  for ($i=2; $i<=$num; $i++) {
    if (($num % $i == 0) && ($i != $num)){
      break;
    }else if ($i == $num) {
      $result[] = $num;
    }
  }
  $num++;

}

foreach ($result as $s) {
  echo $s . ',';
}

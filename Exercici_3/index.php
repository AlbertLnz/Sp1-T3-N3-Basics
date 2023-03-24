<?php

  $X=array(10,20,30,40,50);

  echo("Array (5): ");
  print_r($X);

  echo("\nArray (4): ");
  unset($X[3]); //postion 3 == 40
  $X= array_values($X);
  print_r($X);

?>
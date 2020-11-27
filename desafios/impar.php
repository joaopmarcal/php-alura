<?php

  for ($count = 0;$count <=100;$count++){
    if (($count % 2) == 0){
      continue;
    }
    echo "$count" . PHP_EOL;
  }
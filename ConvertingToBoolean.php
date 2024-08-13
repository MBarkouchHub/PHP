<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  */
  echo 'empty : ';
  var_dump((bool) "");
  echo '<br>';
  echo '<br>';
  echo 'empty array : ';
  var_dump((bool) array());
  echo '<br>';
  echo '<br>';
  echo 'empty [] : ';
  var_dump((bool) []);
  echo '<br>';
  echo '<br>';
  echo ' 0 : ';
  var_dump((bool) 0);
  echo '<br>';
  echo '<br>';
  echo '"0" : ';
  var_dump((bool) "0");
  echo '<br>';
  echo '<br>';
  echo '"string" : ';
  var_dump((bool) "string");
  echo '<br>';
  echo '<br>';
  echo 'array(1) : ';
  var_dump((bool) array(1));
  echo '<br>';
  echo '<br>';
  echo '[1] : ';
  var_dump((bool) [1]);
  echo '<br>';
  echo '<br>';
  echo '100 : ';
  var_dump((bool) 100);
  echo '<br>';
  echo '<br>';
  echo '-100 : ';
  var_dump((bool) -100);
  echo '<br>';
  echo '<br>';
  echo '10.5 : ';
  var_dump((bool) 10.5);
  echo '<br>';
  echo '<br>';
  echo '-10.5 : ';
  var_dump((bool) -10.5);
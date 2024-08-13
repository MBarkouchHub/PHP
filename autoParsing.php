<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
  */

  echo '1 + "2" = ';
  echo 1 + "2"; // 3
  echo '<br>';
  echo gettype(1 + "2"); // Integer
  echo '<br>';
  echo '<br>';


  echo 'True : ';
  echo True; // 1
  echo '<br>';
  echo gettype(True); // Boolean
  echo '<br>';
  echo '<br>';

  echo 'True + True = ';
  echo True + True; // 2
  echo '<br>';
  echo gettype(True + True); // Integer
  echo '<br>';
  echo '<br>';

  echo " 5 + '5 Lessons'";
  echo 5 + '5 Lessons'; // 10 => Warning
  echo '<br>';
  echo gettype(5 + '5 Lessons'); // Integer => Warning
  echo '<br>';
  echo '<br>';


  echo "10 + 15.5 = ";
  echo 10 + 15.5; // 25.5
  echo '<br>';
  echo gettype(10 + 15.5); // double => Float
  echo '<br>';
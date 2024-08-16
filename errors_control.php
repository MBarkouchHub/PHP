<?php

/*
  Operators
  - Used To Perform Operations On Values.

  Error Control Operator
  - Control The Errors

  @
  - File
  - Include
*/

// Include
//(@include("index.php")) or die("Include File Not Found");

echo '<br>';

// File
$f = @file("file.txt") or die("File Not Found");
echo '<pre>';
print_r($f);
echo '</pre>';
echo '<br>';


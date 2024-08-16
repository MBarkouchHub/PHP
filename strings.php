<?php

/*
  Operators
  - Used To Perform Operations On Values.

  String Operators
  - Concatenate Strings

  .
  .=
*/

define("CITY", "ZT");

$name = "Mourad";
$lname = "BARKOUCH";
$age = 27;

echo "$name $lname $age";
echo '<br>';
echo "{$name} {$lname} {$age}";
echo '<br>';
echo $name . " " . $lname . " " . $age;
echo '<br>';
echo "{$name} {$lname} {$age} " . CITY . " " . testing();
echo '<br>';

function testing() {
    return 1;
}

$x = $name ." ";
$x .= $lname ."  ";
$x .= $age;

echo $x;

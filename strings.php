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

echo '<br>';
echo '<br>';
echo str_repeat("_", 50);
echo '<br>';
echo '<br>';

$str = $x;

echo "First Letter Is $str[0]<br>";
echo "4th Letter Is $str[3]<br>";
echo "Number Of Letters " . strlen($str) . "<br>";
echo "Last Letter Is $str[-1]<br>";
echo "Last Letter Is {$str[strlen($str) - 1]}<br>";

echo '<br>';
echo '<br>';
echo str_repeat("_", 50);
echo '<br>';
echo '<br>';

echo lcfirst("Mourad Barkouch") . "<br>";
echo ucfirst("mourad barkouch") . "<br>";
echo strtolower("MOURAD BARKOUCH") . "<br>";
echo strtoupper("mourad barkouch") . "<br>";
echo ucwords("mourad barkouch") . "<br>";
echo ucwords("mourad_barkouch", "_") . "<br>";
echo str_repeat("*", 30);


echo '<br>';
echo '<br>';
echo str_repeat("_", 50) . 'Array to String';
echo '<br>';
echo '<br>';

$friends = ["Ahmed", "Osama", "Ali", "Salem"];

echo implode(" ", $friends) . "<br>";
echo implode(", ", $friends) . "<br>";
echo implode("@@", $friends) . "<br>";
echo implode($friends) . "<br>";

echo '<br>';
echo '<br>';
echo str_repeat("_", 50) . 'String to array';
echo '<br>';
echo '<br>';

$friends = ["Ahmed", "Osama", "Ali", "Salem"];

echo implode(" ", $friends) . "<br>";
echo implode(", ", $friends) . "<br>";
echo implode("@@", $friends) . "<br>";
echo implode($friends) . "<br>";

$str = "Elzero Web School Is Cool";

echo "<pre>";
print_r(explode(" ", $str));
echo "</pre>";

echo "<pre>";
print_r(explode("I", $str));
echo "</pre>";

echo "<pre>";
print_r(explode(" ", $str, 3));
echo "</pre>";

echo "<pre>";
print_r(explode(" ", $str, -2));
echo "</pre>";

echo str_shuffle("Elzero") . "<br>";
echo strrev("Elzero") . "<br>";

echo strlen("   Elzero  ") . "<br>";
echo strlen(trim("   Elzero  ")) . "<br>";

echo trim("#@@Elzero@@@###", "@") . "<br>";

echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
echo ltrim("#@@Elzero@@@###", "#@") . "<br>";

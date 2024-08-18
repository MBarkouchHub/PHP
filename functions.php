<?php


function get_data($name, $country = "Private", ...$skills) {
    echo "Hello $name Your Country Is $country <br>";
    foreach ($skills as $skill) :
        echo "-- $skill <br>";
    endforeach;
}


get_data("Mourad", "Morocco", "HTML", "CSS", "JS", "PHP");

function one() {
    return "One From Function";
}

// echo one();

$func1 = "one";

echo function_exists($func1);




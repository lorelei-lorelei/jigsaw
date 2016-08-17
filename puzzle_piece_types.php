<?php
$name = "Kimmii";
$bigwolf = 37;
$mythical = ['unicorns', 'elves', 'dwarves', 'dragons', 'griffins'];
$variable = 364.25;

//Experimenting with gettype function

echo gettype ($name)." "; //returns as string
echo gettype ($bigwolf)." ";//returns as integer
echo gettype ($mythical)." ";//returns as array

//Experimenting with settype function

settype($variable, "string");
echo $variable." ";
settype ($variable, "integer");
echo $variable." ";
settype ($variable, "float");
echo $variable." ";
settype ($variable, "boolean");
echo $variable." ";

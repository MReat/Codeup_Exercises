<?php
// $a = 10;
// $b = 5;


function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    echo $a + $b . PHP_EOL;
    } else {
	echo "Values are not numeric.  Please re-enter valid numbers as values" . PHP_EOL;
}

}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    echo $a - $b . PHP_EOL;
	} else {
		echo "Values are not numeric.  Please re-enter valid numbers as values" . PHP_EOL;
}
   
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	   echo $a * $b . PHP_EOL;
	} else {
		echo "Values are not numeric.  Please re-enter valid numbers as values" . PHP_EOL;
}
    
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    echo $a / $b . PHP_EOL;
    } else {
		echo "Values are not numeric.  Please re-enter valid numbers as values" . PHP_EOL;
}
   
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    echo $a % $b . PHP_EOL;
   } else {
		echo "Values are not numeric.  Please re-enter valid numbers as values" . PHP_EOL;
}
 
}

$a = "stuff";
$b = 2;

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
modulus($a, $b);


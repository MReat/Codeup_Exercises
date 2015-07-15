<?php
$a = 20;
$b = 4;

function errorCheck ($a, $b) 
{
	if (!is_numeric($a)) {
		echo "{$a} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif (!is_numeric($b)) {
		echo "{$b} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
    } elseif ($b == 0) {
		echo "Invalid Input = {$b}.  Cannot divide by 0." . PHP_EOL;
		return false;
	} else {
		echo add($a, $b);
		echo subtract($a, $b);
		echo multiply($a, $b);
		echo divide($a, $b);
		echo modulus($a, $b);
	}
}

function add($a, $b)
{
    return $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
    return $a - $b . PHP_EOL;
}

function multiply($a, $b)
{
    return $a * $b . PHP_EOL;
}
    
function divide($a, $b)
{
    return $a / $b . PHP_EOL;
}
   
function modulus($a, $b)
{
    return $a % $b . PHP_EOL;
}
 
errorCheck($a, $b);







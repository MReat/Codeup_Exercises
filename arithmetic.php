<?php
$a = 10;
$b = 5;

// function compare($a, $b, $strict) {
//     if ($strict === true) {
//         return $a === $b ? 'True' : 'False';
//     } else {
//         return $a == $b ? 'True' : 'False';
//     }
// }

function errorCheck ($a, $b) {
	if (!is_numeric($a)) {
		echo "{$a} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif (!is_numeric($b)) {
		echo "{$b} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
    } elseif ($b == 0) {
		echo "Invalid Input = {$b}.  Cannot divide by 0." . PHP_EOL;
}

function add($a, $b)
{
	if (!is_numeric($a)) {
		echo "{$a} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif (!is_numeric($b)) {
		echo "{$b} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
    } else {
	    return $a + $b . PHP_EOL;
}

}

function subtract($a, $b)
{
	if (!is_numeric($a)) {
		echo "{$a} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif (!is_numeric($b)) {
		echo "{$b} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
    } else {
	    return $a - $b . PHP_EOL;
}
   
}

function multiply($a, $b)
{
	if (!is_numeric($a)) {
		echo "{$a} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif (!is_numeric($b)) {
		echo "{$b} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
    } else {
	    return $a * $b . PHP_EOL;
}
    
}

function divide($a, $b)
{
	if (!is_numeric($a)) {
		echo "{$a} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif (!is_numeric($b)) {
		echo "{$b} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif ($b == 0) {
		echo "Invalid Input = {$b}.  Cannot divide by 0." . PHP_EOL;
    } else {
	    return $a / $b . PHP_EOL;
}
   
}

function modulus($a, $b)
{
	if (!is_numeric($a)) {
		echo "{$a} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
	} elseif (!is_numeric($b)) {
		echo "{$b} is not numeric.  Please re-enter valid number" . PHP_EOL;
		return false;
    } elseif ($b == 0) {
		echo "Invalid Input = {$b}.  Cannot divide by 0." . PHP_EOL;
    } else {
	    return $a % $b . PHP_EOL;
}
 
}

// $a = 10;
// $b = 0;

echo add($a, $b);
echo subtract($a, $b);
echo multiply($a, $b);
echo divide($a, $b);
echo modulus($a, $b);


<?php

// TODO: Create your inspect() function here
function inspect ($arg1) 
{
	$typeCheck = gettype($arg1);

	switch($typeCheck) {
		case 'string':
			if (empty($arg1)) {
				return 'The item is a ' . $typeCheck . " and is empty" . PHP_EOL . PHP_EOL;
			} else {
				return 'The item is a ' . $typeCheck . " and has a value of: " . $arg1 . PHP_EOL . PHP_EOL;
			}
			break;
		case 'array':
			if (empty($arg1)) {
				return 'The item is an ' . $typeCheck . " and is empty" . PHP_EOL . PHP_EOL;
			} else {
				echo "The values are: " . PHP_EOL;
				print_r($arg1);
				return 'The item is an ' . $typeCheck  .PHP_EOL . PHP_EOL;
			}
			break;
		case 'boolean':
			if ($arg1){
				return 'The item is an ' . $typeCheck . " and has a value of: TRUE" . PHP_EOL . PHP_EOL;
			} else {
				return 'The item is an ' . $typeCheck . " and has a value of: FALSE" . PHP_EOL . PHP_EOL;
			}		
			break;
		case 'integer':
			if (empty($arg1)){
				return 'The item is an ' . $typeCheck . " and is empty" . PHP_EOL . PHP_EOL;
			} else {
				return 'The item is an ' . $typeCheck . " and has a value of: " . $arg1 . PHP_EOL . PHP_EOL;
			}
			break;
		case 'double':
			if (empty($arg1)){
				return 'The item is a ' . $typeCheck . " (float) and is empty" . PHP_EOL . PHP_EOL;
			} else {
				return 'The item is a ' . $typeCheck . " (float) and has a value of: " . $arg1 . PHP_EOL . PHP_EOL;
			}
			break;
		case 'NULL':
			return 'The item is a ' . $typeCheck . " and has a value of: " . $arg1 . PHP_EOL . PHP_EOL;
			break;
		default:
			return 'Unknown Type' . $arg1 . PHP_EOL. PHP_EOL;
	}
	
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo (inspect($num1));

echo 'Inspecting $num2:' . PHP_EOL;
echo (inspect($num2));

echo 'Inspecting $num3:' . PHP_EOL;
echo (inspect($num3));

echo 'Inspecting $num4:' . PHP_EOL;
echo (inspect($num4));

echo 'Inspecting $null:' . PHP_EOL;
echo (inspect($null));

echo 'Inspecting $bool1' . PHP_EOL;
echo (inspect($bool1));

echo 'Inspecting $bool2' . PHP_EOL;
echo (inspect($bool2));

echo 'Inspecting $string1' . PHP_EOL;
echo (inspect($string1));

echo 'Inspecting $string2' . PHP_EOL;
echo (inspect($string2));

echo 'Inspecting $array1' . PHP_EOL;
print_r (inspect($array1));

echo 'Inspecting $array2' . PHP_EOL;
print_r (inspect($array2));

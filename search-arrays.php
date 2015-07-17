<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function nameCheck ($needle, $haystack) 
{
	$result = array_search($needle, $haystack);
	if ($result !== FALSE) {
		// echo "{$needle} belongs to the group." . PHP_EOL;
		return TRUE ;
	} else {
		// echo "{$needle} does NOT belong to the group." . PHP_EOL;
		return FALSE . PHP_EOL;
	}

}

var_dump(nameCheck('Tina', $names));
var_dump(nameCheck('Bob', $names));

function compareArrays ($array1, $array2) 
{
	$match = 0;

	foreach ($array1 as $item) {
		$result = array_search($item, $array2);
		if ($result !== FALSE) {
			$match++;

		}
	}
	return $match;
}

print_r("The number of matches is: " . compareArrays($names, $compare) . PHP_EOL);



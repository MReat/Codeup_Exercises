<?php 

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Homer Simpson, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array, $sort = false) {

	if ($sort) {
		asort($array);
	}
	$minusLastElement = array_pop($array);
	$implodeTarget = implode(', ', $array);
	$newCombined = $implodeTarget . ", and " . $minusLastElement;
	return $newCombined;
	
}

$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;


 ?>
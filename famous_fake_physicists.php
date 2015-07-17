<?php 
// Converts array into list n1, n2, ..., and n3

function humanizedList($array) {
// Your solution goes here!
	$implodeTarget = implode(', ', $array);
	return $implodeTarget;
	
}

// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// TODO: Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);
asort($physicistsArray);
print_r($physicistsArray);
$minusLastPhysicist = array_pop($physicistsArray);


 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}, and {$minusLastPhysicist}." . PHP_EOL;


 ?>
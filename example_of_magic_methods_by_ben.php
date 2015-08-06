<?php

// Ben's example for illustrating magic methods

$theBat = new Superhero('Ben', 'Affleck', 'Batman');

echo $theBat->fullName() . PHP_EOL;
echo $theBat->alterEgo() . PHP_EOL;

$theBat->flight = false;
$theBat->heatVision = false;
$theBat->underwaterBreathing = false;
$theBat->superStrength = false;


$theBat->firstName = 'George';
$theBat->lastName = 'Clooney';

echo $theBat->$firstName;
echo $theBat->$getFirstName();

$theBat->abilityToBeatBatman = true;


if ($theBat->flight) {
	echo "Up, up, and away!\n";
} else {
	echo "Does anybody have a quarter for the bus?\n"
}


$id = 1;

$park = NationalPark::find($id);

echo $park->name; // echo out the id #1 name
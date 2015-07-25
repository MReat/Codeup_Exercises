<?php  

class Automobile
{
	public $make;
	public $model;
	public $color;
	public $description = "Made by " . $this->make . " and its the " . $this->model . " model.";

	public function setColor($color) // function to set the color of the Automobile object
	{
		return $this->color = $color
	}

	public function honk ()
	{
		return "Beep. Beep";
	}

	public function accelerate ()
	{
		return $this->increaseFuelAirMixture;
	}

	public function increaseFuelAirMixture ()
	{
		//api to the fuel injectors
	}

	public function brake($message)
	{
		echo "Hey Buddy, " . $message
		// engages the brake and screaches to a halt!
	}
}

$newCar = new Automobile(); // creates new instance of a car for the Automobile class (creates an object)
$newCar->color = 'salmon'; // assign color of salmon to the newCar
$newCar->make = 'vw'; // assign make of vw to the newCar
$newCar->model = 'bug'; // assign model of bug to the newCar

$niceThingToSay = 'nice driving. have a great day!'
$newCar->brake($niceThingToSay);
$newCar->honk();

var_dump($newCar);

$batmobile = new Automobile(); // create new car... the batmobile
$batmobile->setColor('black'); // calls function to pass the parameter of black to the color property
$batmobile->make = 'Wayne Enterprises'; // sets a value to the property of make for the batmobile
echo "The batmobile was made by " . $batmobile->make;

?>
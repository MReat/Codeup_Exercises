<?php

$cars = array(
  'Toyota Solara' => array(
    'year' => 2001,
    'doors' => 2,
    'color' => 'gray',
    'mileage' => 100000,
    'sunroof' => true,
    'convertable' => false,
    'license' => 'JSRULZ',
  ),

  'Honda Odyssey' => array(
    'year' => 2004, 
    'doors' => 4,
    'color' => 'maroon',
    'mileage' => 60000,
    'sunroof' => false,
    'convertable' => false,
    'license' => 'ILUVPHP',
  ),

  'Cadillac Escalade' => array(
    'year' => 2014,
    'doors' => 4,
    'color' => 'white',
    'mileage' => 5000,
    'sunroof' => false,
    'convertable' => false,
    'license' => 'HTML5',
  ),

);

// example to show before and after add_car()
// print_r($cars); 

$car = 'Cadillac Escalade';

function list_cars($array, $item) // added 2 parameters to allow for 1 item in array to be selected and outputted
{
  foreach ($array as $model => $carDetails) {
    // if($model == $item) {
      foreach ($carDetails as $carDetail => $detail){
     }
        // echo("") . PHP_EOL;
        // print_r("I have a " . $carDetails['year'] . " {$model}.  Details below:" . PHP_EOL);
        // echo("--------------------------------------------------" . PHP_EOL);
        // print_r($carDetails['doors'] . " Door " . $carDetails['year'] . " {$model}" . PHP_EOL);
        // print_r("Color: " . $carDetails['color'] . PHP_EOL);
        // print_r("Mileage: " . $carDetails['mileage'] . PHP_EOL);
        // print_r("Sunroof: " . changeToNA($carDetails['sunroof']) . PHP_EOL);
        // print_r("Convertable: " . changeToNA($carDetails['convertable']) . PHP_EOL);
        // print_r("License NO: " . $carDetails['license'] . PHP_EOL . PHP_EOL);
    // }
  }
 
}

// Function to change boolean values to Yes or N/A
function changeToNA ($value){
  if ($value) {
    return "Yes";
  } else {
    return "N/A";
  }
}

// adding car input and function
$newCar = array(
   'Nissan Murano' => array(
    'year' => 2012,
    'doors' => 4,
    'color' => 'white',
    'mileage' => 35000,
    'sunroof' => true,
    'convertable' => false,
    'license' => 'C0D3UPR0X',
  ),
);

function add_car ($array1, $array2) {
  $newArray = array_merge($array1, $array2);
  return $newArray;
}

// function execution(s)
list_cars($cars, $car);

// $cars = add_car($cars, $newCar);
// print_r($cars);

// $car = 'Nissan Murano';
// list_cars($cars, $car);

?>
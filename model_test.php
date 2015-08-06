<?php 

require_once 'model.php';

$modelTest = new Model();


$modelTest->item1 = "Some Text";
$modelTest->item2 = "More Text";
$modelTest->item3 = "ssljslkjlk";

echo $modelTest->item1 . PHP_EOL;
echo $modelTest->item2 . PHP_EOL;
echo $modelTest->item3 . PHP_EOL;


?>
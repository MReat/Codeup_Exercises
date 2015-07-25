<?php

class Person 
{
	public $firstName:
	public $lastName;

	public function __construct ($first, $last) // constructors can take arrays, strings, booleans, etc.
	{
		$this->firstName = $first:
		$this->lastName = $last:
	}

	public function __destruct ()
	{
		echo "$this->{'firstName'} {'lastName'}'s time of death."
	}

	public function sayHello()
	{
		echo "Hi, " . $this->firstName . "!";
	}
}

$pinochio = new Person('Pinochio', 'Calvini');
echo $pinochio->firstName;


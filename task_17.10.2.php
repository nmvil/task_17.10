<?php

interface SpecialMove {
	public function specialMove();
}

abstract class Transport implements SpecialMove  {
	protected $fuel = 70;

	public function moveForward()
	{
		--$this->fuel;
		// ... code ...
	}
	public function moveBackward()
	{
		--$this->fuel;
		// ... code ...
	}

	function refuel (int $litre) {
		$this->fuel += $litre;
	}
}

class Car extends Transport {
	protected function specialMove() 
	{
		// ... Nitro code ...
	}
	protected $color = '';
	protected $model = '';

	function __construct (string $col, string $mod) {
		$color = $col;
		$model = $mod;
	}

	function changeColor (string $col) {
		$this->$color = $col;
	}

	protected function horn() {}
	protected function wipeWindow() {}
}

class Excavator extends Transport {
	protected function specialMove() 
	{
		// ... shovel moving code ...
	}
}

function zeroTo100 (Car $car) {
	$car->moveForward();
	$car->specialMove();
}
?>
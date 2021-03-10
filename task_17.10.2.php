<?php

interface SpecialMove {
	public function specialMove();
}

abstract class Transport {
	protected function moveForward()
	{
		// ... code ...
	}
	protected function moveBackward()
	{
		// ... code ...
	}
}

class Car implements SpecialMove {
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

	protected function horn() {}
	protected function wipeWindow() {}
}

class Excavator implements SpecialMove {
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
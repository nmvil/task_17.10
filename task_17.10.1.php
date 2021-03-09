<?php

class family
{
	protected $peopleCount = 3;
	protected $surname = 'Ivanov';
}


class father extends family
{
	protected $age  = 30;
	protected $wife = ''; 
	protected $name = '';

}

class mother extends family
{
	protected $age  = 30; 
	protected $husband = '';
	protected $name = '';

}

class child extends family
{
	
	function __construct()
	{
		++$this->peopleCount;
	}

	protected $mother = '';
	protected $father = '';
}
?>
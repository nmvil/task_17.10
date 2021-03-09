<?php

class Family
{
	protected $peopleCount = 0;
	protected $surname = 'Ivanov';
}


class Father extends Family
{
	protected $age  = 0;
	protected $wife = ''; 
	protected $name = '';
	// когда создаём новый объект, количество членов семьи увеличивается
	// при создании объекта необходимо указать имя, жену, возраст
	function __construct(string $name, Mother $wife, int $age)
	{
		++$this->peopleCount;
		$this->name = $name;
		$this->$age = $age;
		$this->wife = $wife;
	}

}

class Mother extends Family
{
	protected $husband = '';
	protected $name = '';
	protected $age  = 0; 
	// когда создаём новый объект, количество членов семьи увеличивается
	// при создании объекта необходимо указать имя, мужа, возраст
	function __construct(string $name, Father $husband, int $age)
	{
		++$this->peopleCount;
		$this->name = $name;
		$this->$age = $age;
		$this->husband = $husband;
	}

}

class Child extends Family
{
	protected $name = '';
	protected $mother;
	protected $father;
	// когда создаём новый объект, количество членов семьи увеличивается
	// при создании объекта child необходимо указать имя, пол (0 - девочка, 1 - мальчик), объекты родителей
	function __construct(string $name, bool $isMale, Father $father, Mother $mother)
	{
		++$this->peopleCount;
		$this->name = $name;
		$this->mother = $mother;
		$this->father = $father;
	}

}
?>
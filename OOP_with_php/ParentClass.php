<?php

class ParentClass
{
	//properties and methods goes here
	protected $name = "Hey There!";


	private $something = 25;
	/* private scope can only be accessible in the parent class,
	private can not be inherited
	*/

	public function name()
	{
		return $this->something;
	}
}

?>
<?php

class NewClass extends ParentClass
{
	//properties and methods goes here.
	//here newclass and parentclass acts as one class.
	//here we will learn how to access a protected method 
	//from  a parent class to child class.
	// newclass is a child class
	
	public function name()
	{
		return $this->name;
	}
}

?>
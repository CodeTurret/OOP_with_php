<?php

class TestClass
{
	//properties and methods goes here
	public $data = "I am a property";

	/*
	Constructors

	All objects can have a special built-in method called a ‘constructor’.
	Constructors allow you to initialise your object’s properties (translation: give your properties values,)
	when you instantiate (create) an object.

	Note: If you create a __construct() function (it is your choice,)
	PHP will automatically call the __construct() method/function when you create an object from your class.

	The ‘construct’ method starts with two underscores (__) and the word ‘construct’.

	*/
	public function __construct()
	{
		echo "<br><b>TestClass.php</b> This class has been constructed<br>";
		//this will echo every time an obejct of TestClass created;
	}

	//set is used for take a input or value from user or predefined
	public function setNewProperty($newData)
	{
		$this->data = $newData;
		//we don't use $ in front of data, that means we referrencing a property

	}

	//get is used for returning the value, this is called get, because it gets the input from Set method
	public function getProperty()
	{
		return $this->data;
	}


	public function __destruct()
	{
		echo "<br> This is the end of the class <br> ";
	}
}



?>

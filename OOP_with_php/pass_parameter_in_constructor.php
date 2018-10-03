<?php 

class Users {

	//Properties and method goes here
	public $first;
	public $middle;
	public $last;
	public $age;
	public $hobby;


	public function __construct($first, $middle, $last, $age, $hobby)
	{
		$this->first = $first;
		$this->middle = $middle;
		$this->last = $last;
		$this->age = $age;
		$this->hobby = $hobby;

	}

	public function fullName(){
		return $this->first." ".$this->middle." ".$this->last;
	}

}


?>
<?php

	include 'ParentClass.php';
	include 'NewClass.php';
	include 'TestClass.php';

	// Create object of NewClass
	$object = new NewClass;

	// Create object of ParentClass
	$object1 = new ParentClass;

	// Create object of TestClass
	$object2 = new TestClass;

?>

<!DOCTYPE html>
<html>
<head>
	<title> OOP with PHP </title>
</head>
<body>
<?php

	echo $object->name();
	/*name() is a function, and as it is a function of NewClass
	and $object is the object of NewClass,
	so we can call name() function through $object
	*/
	echo " ";
	echo $object1->name();
	echo "<br/>";

	echo $object2->getProperty();

	echo "<br/>";
	$object2->setNewProperty("I am a changed Man");
	echo $object2->getProperty();


	for ($i=0; $i < 5 ; $i++) {
		# code...
		echo "<br>";
	}


	$objectNew = new TestClass;

	$objectNew->setNewProperty("Hi I am a new object of test class");
	echo $objectNew->getProperty();


?>
</body>
</html>

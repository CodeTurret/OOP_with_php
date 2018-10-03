<?php

  include 'staticClass.php';
  include 'pass_parameter_in_constructor.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
</head>
<body>

</body>
</html>
<?php

echo staticClass::$static;
echo "<br>";
echo "<br>";
echo staticClass::staticMethod() . " inside a static method";
echo "<br/>";
echo staticClass::staticMethod2()."inside another static method";



echo "<br>";
echo "<br>";
/*
	Initialise object properties with constructor.
	Instead of predefined value, here we give value first, then
	the values go through the constrcutor method of the class.

*/

	$users1 = new Users('Abu','Zabbar','Mia',23,'Fishing');	

	echo $users1->fullName();

?>

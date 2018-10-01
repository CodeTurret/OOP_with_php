<?php

  include 'staticClass.php';

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



?>

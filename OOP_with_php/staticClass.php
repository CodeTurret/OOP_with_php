
<?php

class staticClass
	{
		public static $static="Hello, I am a Static property";
	
		public function __construct()
		{

		} 

		public static function staticMethod()
		{
			return self::$static;
		}

		public static function staticMethod2()
		{
			return self::$static;
		}





	}



?>
<?php

class ToString
{
  public $error = "<b>This is ".__CLASS__." class, not toString Method</b>";

  public function __constrcut()
  {

  }

  public function __toString()
  {
      echo "<br>";
      echo "toString method: ";
      return $this->error;
  }


}


?>

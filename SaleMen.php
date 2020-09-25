<!DOCTYPE html>
<html>
<body>

<?php
class SaleMen {
  public $id;
  public $pass;

  

  function __construct($id ,$pass) {
    $this->id = $id; 
    $this->pass = $pass;
  }
  function get_id() {
    return $this->id;
  }
  function get_pass() {
    return $this->pass;
  }
  
}

$obj1 = new SaleMen("" , "" , "");
echo $obj1->get_name();

echo $obj1->get_pass();
?>
 
</body>
</html>

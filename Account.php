<!DOCTYPE html>
<html>
<body>

<?php
class Account {
  public $name;
  public $address;
  public $contact;
  

  function __construct($name ,$address , $contact) {
    $this->name = $name; 
    $this->address = $address;
  }
  function get_name() {
    return $this->name;
  }
  function get_address() {
    return $this->address;
  }
  function get_contact() {
    return $this->contact;
  }
}

$obj1 = new Person("Jawad" , "105 mansoora" , "03000303");
echo $obj1->get_name();

echo $obj1->get_color();
?>
 
</body>
</html>

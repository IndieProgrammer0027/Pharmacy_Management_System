<!DOCTYPE html>
<html>
<body>

<?php
class SelectedMedicine {
  public $medicine;
  public $qnt;
  public $discount;
  public $amount;
  
  

  function __construct($medicine  ,$qnt , $discount,$amount) {
    $this->medicine = $medicine; 
    $this->discount = $discount;
    $this->qnt = $qnt;
    $this->amount = $amount;

  }

}

?>
 
</body>
</html>

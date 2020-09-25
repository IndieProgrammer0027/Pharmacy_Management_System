<!DOCTYPE html>
<html>
<body>

<?php
class Bill {
  public $billnumber;
  public $custName;
  public $date;
  public $totalPrice;
  public $totalDiscount;
  public $printStatus;
  

  function __construct($billNumber ,$custName , $date , $totalPrice ,$totalDiscount,$printStatus) {
    $this->billNumber = $billNumber; 
    $this->custName = $custName;
    $this->date = $date;
    $this->totalPrice = $totalPrice;
    $this->printStatus = $printStatus;
    $this->totalDiscount = $totalDiscount;
  }
  function get_billNumber() {
    return $this->billNumber;
  }
  function get_custname() {
    return $this->custname;
  }
  function get_date() {
    return $this->date;
  }
  function get_totalPrice() {
    return $this->totalPrice;
  }
  function get_totalDiscount() {
    return $this->totalDiscount;
  }
  function get_printStatus() {
    return $this->printStatus;
  }
}

$obj1 = new Bill("","","","","");

?>
 
</body>
</html>

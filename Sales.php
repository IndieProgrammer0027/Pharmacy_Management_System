<!DOCTYPE html>
<html>
<body>

<?php
class Sales {
  public $salesId;
  public $invoice;
  public $date;
  public $totalPrice;
  public $totalDiscount;  

  function __construct($salesId ,$invoice , $date , $totalPrice ,$totalDiscount) {
    $this->salesId = $salesId;
    $this->invoice = $invoice;
    $this->date = $date;
    $this->totalPrice = $totalPrice;
    $this->totalDiscount = $totalDiscount;
  }
  function get_salesId() {
    return $this->salesId;
  }
  function get_invoice() {
    return $this->invoice;
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
  
}
?>
 
</body>
</html>

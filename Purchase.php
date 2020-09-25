<!DOCTYPE html>
<html>
<body>

<?php

class Purchase {
  public $id;
  public $invoice_number;
  public $invoice_date;
  public $current_date;
  public $time;

  

  function __construct($id ,$invoice_number,$invoice_date,$current_date,$time) {

    $this->id = $id;
    $this->invoice_number = $invoice_number;
    $this->invoice_date = $invoice_date;
    $this->current_date = $current_date;
    $this->time = $time;
  }

}

?>
 
</body>
</html>

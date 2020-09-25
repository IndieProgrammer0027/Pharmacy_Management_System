<!DOCTYPE html>
<html>
<body>

<?php

class Medicine {
  public $id;
  public $name;
  public $formula;
  public $companyName;
  public $salePrice;
  public $purchasePrice;
  public $packQNT;
  public $saleQNT;
  public $availableQNT;


  

  function __construct($id ,$name,$formula,$companyName,$salePrice,$purchasePrice,$packQNT,$saleQNT,$availableQNT) {

    $this->id = $id;
    $this->name = $name;
    $this->formula = $formula;
    $this->companyName = $companyName;
    $this->salePrice = $salePrice;
    $this->purchasePrice = $purchasePrice;
    $this->packQNT = $packQNT;
    $this->saleQNT = $saleQNT;
    $this->availableQNT = $availableQNT;

  }

}

?>
 
</body>
</html>

<?php
/*echo '<form action="?target=cart" method="post" accept-charset="utf-8" class="custom-add2cart">';
  echo '<input type="hidden" name="target" value="cart" />';

  echo ' <input type="hidden" name="action" value="add" />';

  echo ' <input type="hidden" name="product_id" value="5" />';
echo ' <div class="add-button-wrapper widget-fingerprint-product-add-button">';
echo '<button type="submit" class="btn regular-button regular-main-button add2cart submit">
           <span>Add to cart</span>
       </button>';
   echo '</div>
</form>';*/
/*del this line from here <p id="text" style="display:none">Checkbox is CHECKED!</p>*/
echo '
<label for="myCheck">Augumentun</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()"><br>
<p id="purchase.php" style="display:none"></p>
<label for="myCheck">Augumentun</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()">
<br><p id="text" style="display:none"></p>
<label for="myCheck">Augumentun</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()">
<br><p id="text" style="display:none"></p>
<label for="myCheck">Augumentun</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()"><br>
<p id="text" style="display:none"></p>
<label for="myCheck">Augumentun</label> 
<input type="checkbox" id="myCheck" onclick="myFunction()"><br>
<p id="text" style="display:none"></p>';




echo '<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("purchase.php");
  if (checkBox.checked == true){
  	text.style.display = "block";
    
  } else {
     text.style.display = "none";
  }
}
</script>';
?>
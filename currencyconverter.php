<?php
if (isset($_POST['submit'])) {
$currency1 = $_POST["currency1"];
$currency2 = $_POST["currency2"];
$amount = $_POST["amount"];

switch ($amount) {
	
case ($currency1 == "RS" && $currency2 == "RS"):
echo " Results: " . $amount * 1;
break;

case ($currency1 == "RS" && $currency2 == "EUR"):
echo " Results: " . $amount * 0.013;
break;

case ($currency1 == "RS" && $currency2 == "GBP"):
echo " Results: " . $amount * 0.011;
break;

case ($currency1 == "RS" && $currency2 == "USD"):
echo " Results: " . $amount * 0.016;
break;

case ($currency1 == "USD" && $currency2 == "USD"):
echo " Results: " . $amount * 1;
break;

case ($currency1 == "USD" && $currency2 == "RS"):
echo " Results: " . $amount * 63.88;
break;

case ($currency1 == "USD" && $currency2 == "GBP"):
echo " Results: " . $amount * 0.72;
break;

case ($currency1 == "USD" && $currency2 == "EUR"):
echo " Results: " . $amount * 0.82;
break;

case ($currency1 == "EUR" && $currency2 == "EUR"):
echo " Results: " . $amount * 1;
break;

case ($currency1 == "EUR" && $currency2 == "RS"):
echo " Results: " . $amount * 78.33;
break;

case ($currency1 == "EUR" && $currency2 == "GBP"):
echo " Results: " . $amount * 0.88;
break;

case ($currency1 == "EUR" && $currency2 == "USD"):
echo " Results: " . $amount * 1.23;
break;

case ($currency1 == "GBP" && $currency2 == "GBP"):
echo " Results: " . $amount * 1;
break;

case ($currency1 == "GBP" && $currency2 == "RS"):
echo " Results: " . $amount * 88.74;
break;

case ($currency1 == "GBP" && $currency2 == "EUR"):
echo " Results: " . $amount * 1.13;
break;

case ($currency1 == "GBP" && $currency2 == "USD"):
echo " Results: " . $amount * 1.39;
break;

default:
echo 'Please select a currency.';
break;

}
}
?>
<html>
<title>Currency converter</title>
<head>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
//for allowing only integers in our forms.
</script>
</head>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<input name="amount" type="text" onkeypress="return isNumberKey(event)" /> 
<br>
<br>From:
<select name="currency1">
<option value="RS">RS</option>
<option value="EUR">EUR</option>
<option value="GBP">GBP</option>
<option value="USD">USD</option>
</select>
<br>
<br>To:
<select name="currency2">
<option value="RS">RS</option>
<option value="EUR">EUR</option>
<option value="GBP">GBP</option>
<option value="USD">USD</option>
</select>
<br />
<br>
<input type="submit" name="submit" value="Convert"></input>
</form>                        
</body>
</html>

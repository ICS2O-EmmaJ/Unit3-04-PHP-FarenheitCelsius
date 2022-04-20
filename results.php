<?php
	// get the temperature in celsius from the textfield
  $celsius = floatval($_POST['celsius']);

  // calculate the temperature in fahrenheit
  $fahrenheit = $celsius * 9 / 5 + 32;
?>

<h3>Results:</h3>
<?php echo "The temperature in fahrenheit is " . number_format($fahrenheit, 2) . " degrees"; ?>
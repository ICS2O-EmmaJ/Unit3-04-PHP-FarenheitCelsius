<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Sphere">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Converting Celsius to Fahrenheit in PHP</title>
  </head>
  <center>
  <body>
    <?php echo "<h1>Converting Celsius to Fahrenheit in PHP</h1>"; ?>
    <!-- Formula of Sphere and Calculations -->    
    <img src="./images/fahrenheit_to_celsius_formulas.png" width="300">
    <h3>Please enter the temperature in Celsius below:</h3>
    <form action="./results.php" method="post" target="results">
      <label for="Celsius">Temperautre (in degrees Celsius):</label>
      <input type="number" step="any" name="celsius" placeholder="Temperature in Celsius"><br><br>
      <input type="submit" value="Calculate">
    </form>
    <br>
    <!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">
    </iframe>
    <br>
    <br>
    <br>
  </body>
  </center>
</html>

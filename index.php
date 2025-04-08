<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <h1>PHP Calculator</h1>
  <form method="GET">
    <label for="number1">Enter first number</label>
    <input name="number1" id="number1" type="number">
    <label for="number2">Enter second number</label>
    <input id="number2" name="number2" type="number">
    <label for="operation">Select operation</label>
      <select name="operation" id="operation">
        <option value="add">+ (Add)</option>
        <option value="subtract">- (Subtract)</option>
        <option value="multiply">* (Multiply)</option>
        <option value="divide">/ (Divide)</option>
      </select>

      <input type="submit" value="Calculate">
  </form>
    
    <?php 
      include 'calculator.php';
      echo "<h3>Result: <span>$result</span></h3>";
      if (strlen($error_message) > 0) {
        echo "<p>$error_message</p>";
      }
    ?>
</body>
</html>
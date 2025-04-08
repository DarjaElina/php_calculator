<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>PHP Calculator</h1>
  <form method="GET">
    <label for="number1">Enter first number</label><input name="number1" id="number1" type="number">
    <label for="number2">Enter second number</label><input id="number2" name="number2" type="number">
    <label for="operation">Select operation</label>
      <select name="operation" id="operation">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
      </select>

      <input type="submit" value="Calculate">
  </form>
    <h3>Result:</h3>
    <?php include 'calculator.php'; echo "<p>$result</p>"?>
</body>
</html>
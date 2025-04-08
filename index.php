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
  <?php
    include 'calculator.php';
  ?>
  <label for="number1">Enter first number</label><input id="number1" type="number">
  <label for="number2">Enter second number</label><input id="number2" type="number">
  <div class="buttons">
    <button>+</button>
    <button>-</button>
    <button>*</button>
    <button>/</button>

    <p>Result:</p>
    <h3></h3>
  </div>
</body>
</html>
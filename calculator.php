<?php
$result = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['number1'], $_GET['number2'], $_GET['operation'])) {
  if (
    is_numeric($_GET['number1']) &&
    is_numeric($_GET['number2'])
  ) {
    $num1 = (float)$_GET['number1'];
    $num2 = (float)$_GET['number2'];
    $operation = $_GET['operation'];

    if ($operation === 'add') {
      $result = $num1 + $num2;
    } else if ($operation === 'subtract') {
      $result = $num1 - $num2;
    } else if ($operation === 'multiply') {
      $result = $num1 * $num2;
    } else if ($operation === 'divide') {
      if ($num2 == 0) {
        $error_message = 'Cannot divide by zero!';
      } else {
        $result = $num1 / $num2;
      }
    } else {
      $error_message = 'Invalid operation selected.';
    }
  } else {
    $error_message = 'Please enter valid numbers.';
  }
}

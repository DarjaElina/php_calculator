<?php
$result = '';

if (isset($_GET['number1']) && isset($_GET['number2'])) {
  $num1 = $_GET['number1'];
  $num2 = $_GET['number2'];
  $operation = $_GET['operation'];

  if ($operation === 'add') {
    $result = $num1 + $num2;
  } else if ($operation === 'subtract') {
    $result = $num1 - $num2;
  } else if ($operation === 'multiply') {
    $result = $num1 * $num2;
  } else if ($operation === 'divide') {
    $result = $num1 / $num2;
  }
}
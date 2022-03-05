<?php

function Calculator($num1, $operation, $num2){
  //declaring variables
  $sum

  //calculator switch
  switch($operation){
    case:"add":
      $sum = $num1 + $num2;
      break;

    case "sub":
      $sum = $num1 - $num2;
      break;

    default:
      $sum = "There was a calculation error, please try again"
      break;
  }

  return $sum;
}
$num1 = $_GET["num1"];
$operation = $_GET["operation"];
$num2 = $_GET["num2"];

echo "Sum: " .Calculator($num1, $operation, $num2);
?>
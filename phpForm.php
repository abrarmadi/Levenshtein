<?php

  echo $_SERVER["REQUEST_URI"];
  $requestedAbsoluteFile = dirname(__FILE__); //. $_SERVER['REQUEST_URI'];
  echo $requestedAbsoluteFile ;
  echo "<br>";
  include 'helper.php';
  //getting the value of the fields
  $str1= $_POST["string1"];
  $str2= $_POST["string2"];
  //calling the helpers with the provided value
  echo Helpers::levenshteinHelper($str1,$str2);
  echo "<br>";
  echo Helpers::hammingHelper($str1,$str2);


?>

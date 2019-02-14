<?php
 include 'helper.php';
 //getting values from the command line 
 echo "enter the first string: ";
 $str1 = trim(fgets(STDIN,1000));
 echo "enter the second string: ";
 $str2 = trim(fgets(STDIN,1000));
 //getting the value of the fields
 $str1= $_POST["string1"];
 $str2= $_POST["string2"];
 //calling the helpers with the provided value

 echo Helpers::levenshteinHelper($str1,$str2);
 echo "\n";
 echo Helpers::hammingHelper($str1,$str2);
 echo "\n";
?>

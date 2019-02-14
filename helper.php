<?php
//calling the file that contains the required classes
include 'distance.php';
class Helpers{
//this is a helper for levenshtein class
public static function levenshteinHelper($str1,$str2){
  //creating new object
 $l = new levenshtein($str1,$str2);
 //calling the get distance function
 $t = $l->getDistance($str1,$str2);

 //return the value of levenshtein distance
 return "the levenshtein value for ".$l->getString1()." and " .$l->getString2()." is : "." ".$t;

}
//this is a helper for hamming class
public static function hammingHelper($str1,$str2){
  //creating a new object of hamming class
  $l = new Hamming($str1,$str2);
   //calling the get distance function
  $t = $l->getDistance($str1,$str2);
   //return the value of hamming distance
  return "the hamming value for ".$l->getString1()." and " .$l->getString2()." is : "." ".$t;
}
}

?>

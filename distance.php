<?php
class distance{
  //this is the parent class and holds 2 strings to compare between them
  private $string1;
  private $string2;
  public function __construct($string1, $string2){
    $this->string1 = $string1;
    $this->string2 = $string2;

  }
  //setters for the properties
  public function setString1($string1){

      $this->string1 = $string1;
  }
  public function setString2($string2){
       $this->string2 = $string2;
  }
  //getters for the properties
  public function getString1(){

    return $this->string1;
  }
  public function getString2(){

    return $this->string2;
  }
  //to calculate the distance depending on which child class will call this function
  protected function calculateDistance($str1,$str2){
    echo"calculateDistance";
  }
  //to get the other classes access the distance value
  public function getDistance($str1,$str2){
    $result=$this->calculateDistance($str1,$str2);
    return $result;
  }
}
//levenshtein algorithm using bottom up approach
class levenshtein extends distance{

  public function __construct($str1,$str2){

    parent::__construct($str1,$str2);

  }
  protected function calculateDistance($str1,$str2){
   $temp [][]= array();
   //setting the coulumns to the value of i
	 for($i = 0; $i < strlen($str1)+1; $i++){
            $temp[0][$i] = $i;
    }
   //setting the rows to the value of i
    for($i = 0; $i < strlen($str2)+1; $i++){
        $temp[$i][0] = $i;
    }
    //computing the minimum distance for each sub problem until we get the solution for the original problem
    for( $i=1;$i <= strlen($str1); $i++){
        for( $j=1; $j <= strlen($str2); $j++){
            if($str1[$i-1] == $str2[$j-1]){
                $temp[$i][$j] = $temp[$i-1][$j-1];
            }else{
                $temp[$i][$j] = 1 + min($temp[$i-1][$j-1], $temp[$i-1][$j], $temp[$i][$j-1]);
              }
            }
        }
        //the minimum distance for the original problem
        return $temp[strlen($str1)][strlen($str2)];
  }
  }
  //hamming algorithm
  class Hamming extends distance{

    public function __construct($str1,$str2){
      parent::__construct($str1,$str2);
    }
    protected function calculateDistance($str1,$str2){

      //to take the size of the longer text
      if((strlen($str1))>=(strlen($str2)))
      {
        $lengthOfLongerText = strlen($str1);
      }
      else {
        $lengthOfLongerText = strlen($str2);
      }
      //this while loop will count the number of differences between the characters
   $i = 0; $count = 0;
   while ($i<$lengthOfLongerText)
   {
       if ($str1[$i] != $str2[$i]){
         $count++;
       }
       $i++;
   }
   return $count;

    }
 }
?>

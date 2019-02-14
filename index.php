
<!DOCTYPE html>
<html>
<!--
instructions to run the file using php's built in server


to run index.php using php's built in server, from the command line we make sure that we are in the directory
that where index.php file is and then we write php -S localhost:8000 (we apply the address and the port)
copy the link that you are listening on and put it in the browser

-->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body{
    background-color: #F6DCD8;
  }
   .form{
     margin:0 auto;
     width:30rem;
     text-align: center;
     font-family: Arial;
     width:20rem;
   }
   .form-title{
     color:#362D2A;
     font-size: 3rem;
   }
   .form-content input{
     background-color:#fefefa;
     width:20rem;
     height:3rem;
     font-family: Arial;
     font-size: .8rem;
     margin-bottom: 1rem;
   }
   .form-content p{
    text-align: left;
    padding-left:0.5rem;
   }
   #submit{
     width:8rem;
     font-size: 1rem;
   }
   .result{
     width:27rem;
     margin: 0 auto;
     font-family: Arial;
   }
   @media (max-width: 352px) {
     .form-title{
       font-size: 2rem;
     }
     .form-content input{
       width:15rem;
     }
   }
   @media (max-width: 327px) {
     .form-title{
       font-size: 1.7rem;
     }
   }
  </style>
</head>
<body>
 <div class="form">
   <div class="form-title">
    <p>Levenshtein Distance</p>
  </div>
  <div class="form-content">
   <form action="index.php" method="POST">

      <input type="text" name="string1" value="First String">
      <br>
      <br>
      <input type="text" name="string2" value="Second String" >
      <br><br>
     <input id="submit" type="submit" name="submit" value="Submit">
  </form>
 </div>
</div>
<?php
//if the form is submitted, will compute the levenshtein and hamming data
if(isset($_POST['submit'])){
  include 'helper.php';
  //getting the value of the fields
  $str1= $_POST["string1"];
  $str2= $_POST["string2"];
  //calling the helpers with the provided value
  echo "<br>";
  echo " <p class='result'>".Helpers::levenshteinHelper($str1,$str2)."<p>";
  echo "<br>";
  echo  "<p class='result'>".Helpers::hammingHelper($str1,$str2)."<p>";

}

?>

</body>
</html>

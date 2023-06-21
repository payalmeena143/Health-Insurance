<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:grey;
        margin:auto;
        border:2px solid black;
        height:1000px;
        /* width:800px; */
    }
    </style>
<body>
    <div class="container">
        <h1>Let's Learn about PHP</h1>
        This is a container
        <br>
        <?php
      $age=34;
      if($age>33){
        echo "Hello Hello";
      }
      else{
        echo "Bye Bye";
      }
      echo "<br>";
      $languages=array("Python","C++","JAVA","C");
      echo $languages[1];
      
      echo "<br>";
      echo count($languages);
      echo "<br>";
      // loops in php
      $a=0;
      while($a<count($languages)){
        echo "The value of a from the while loop is:";
        echo $languages[$a];
        echo "<br>";
        $a++;
      }
      echo "<br>";

      // do while loop
      do {
        echo "The value of a from the do-while loop is:";
        echo $a;
        echo "<br>";
        $a++;
      } while($a<10);
   echo "<br>";
      // for loop
    
      for ($s=0; $s <10 ; $s++) { 
        # code...
        echo "The value of s from the for loop is:";
        echo $s;
        echo "<br>";
      }
      echo "<br>";
      // foreach loop 
      foreach ($languages as $value) {
       echo "The value is:";
       echo $value;
       echo "<br>";
      }
      echo "<br>";

      // function
      function print5(){
        echo "FIVE";
      }
      print5();
      echo "<br>";
      function payal($number){
        echo "<br>Your number is:";
        echo $number;
        // echo "<br>";
      }
      payal(45);
       
      echo "<br>";
      $str="This";
      echo $str;
      echo "<br>";
     
     

      

        ?>
    </div>
</body>
</html>
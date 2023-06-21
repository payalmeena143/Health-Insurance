<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        It is begnning of my php.
        <?php 
        echo "Hello world please print php here";  
        ?>
        <?php
        define('PI',3.14);
        $variable1=5;
        echo "<br>";
        $variable2=2;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";

         echo "The value of variable1 and variable2 is:";
        echo $variable1+$variable2;
        echo "<br>";
        echo "The value of variable1 and variable2 is:";
        echo $variable1-$variable2;
        echo "<br>";
        echo "The value of variable1 and variable2 is:";
        echo $variable1*$variable2;
        echo "<br>";
        echo "The value of variable1 and variable2 is:";
        echo $variable1/$variable2;
        echo "<br>";

        $newvar=$variable1;
        $newvar +=1;
        echo "The value of newvar is:";
        echo $newvar;
        echo "<br>";
        echo "<br>";

        echo "<h3>Hey I am inserting html in php!! </h3>";
        echo "<br>";

        echo "The value of 1==4 is:";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
          echo "<br>";

          echo "The value of 1>=4 is ";
          echo var_dump(1>=4);
          echo "<br>";

           echo "The value of 1<=4 is ";
           echo var_dump(1<=4);
          echo "<br>";
         
          echo "The value after operator is:";
         echo $variable1++;
         echo "<br>";
         echo "The value after operator is:";
         echo  $variable2--;
         echo "<br>";
         echo "The value after operator is:";
         echo  ++$variable1;
         echo "<br>";
         echo "The value after operator is:";
          echo --$variable2;
          echo "<br>";

          $myVar = (true and false);
          echo "<br>";
          echo var_dump($myVar);
          $myVar = (true or false);
          echo "<br>";
          echo var_dump($myVar);
          
          echo "<br>";
          echo "Data Types <br>";
          
          $var= "This is a String";
         
          $var2=45;
          echo "<br>";
          echo var_dump($var);
          echo "<br>";
          echo var_dump($var2);
          echo "<br>";
          echo PI;
        ?>
    </div>
</body>
</html>
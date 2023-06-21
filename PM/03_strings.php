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
        background-color:green;
        margin:auto;
        border:2px solid black;
        height:1000px;
        /* width:800px; */
    }
    </style>
<body>
    <div class="container">
      
        <?php
        echo "<h2>Hello I am Payal!!</h2>";
        $str="This";
         echo "The length of string is:";
         echo "<br>";
         $lenn=strlen($str);
        echo "<br>";
         echo "The length of string is ".$lenn." Thank You <br>";
         echo "<br>";
         echo "The word count in string is ".str_word_count($str);
         echo "<br>";
         echo "The reverse of string is: ".strrev($str);
         echo "<br>";
         echo "The position in the string is: ".strpos($str,"is");
         echo "<br>";
         echo "The replace some content in string is: ".str_replace("is","at",$str);
         echo "<br>";
         echo $lenn;
         echo "<br>";
        ?>
</div>
    </body>
</html>
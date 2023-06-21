<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql="INSERT INTO `trip1`.`trip1` ( `name`, `email`, `gender`, `age`, `phone`, `other`, `dt`) VALUES ('$name', '$email', '$gender', '$age', '$phone', '$desc', current_timestamp());";
    echo $sql;

    // Execute the query
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welocome to travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@1&family=Lobster&family=Open+Sans:ital,wght@1,700&family=Oswald:wght@400;500&family=Raleway:wght@100&family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="bg" src="IIITA_NEW.jpg" alt="IIIT Allahabad">
    <div class="container">
        <h1>Welocome to the IIITA Allahabad USA Trip</h1>
        <p>Please fill the form to confirm your participation in the trip</p>
        <!-- <p class="SubmitMSG" >Thanks for submitting the form,We are happy to see you to joining the USA trip.</p> -->
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <br>
        <br>
        <form action="index.php" method="post">
            <h3 style="margin-left:300px;">Name</h3>
            <input type="text" name="name" id="name" placeholder="Enter your name " style="border:2px solid black; padding-left: 20px;padding-right:20px; margin-left:300px; height:30px;width:500px;">
            <br><br>
            <h3 style="margin-left:300px;">Email</h3>
            <input type="email" name="email" id="email" placeholder="Enter your email" style="border:2px solid black; padding-left: 20px;padding-right:20px; margin-left:300px;height:30px;width:500px;">
            <br><br>
            <!-- <h3 style="margin-left:300px;" >Gender</h3> -->
            <!-- <input type="text" name="Gender" id="Gender" placeholder="Enter Your gender" style="border:2px solid black; padding-left: 20px;padding-right:20px; margin-left:300px;height:30px;width:500px;"> -->
            <h3 style="margin-left:300px;">Select Your Gender</h3>
            <select name="gender" style="border:2px solid black; padding-left: 20px;padding-right:20px; margin-left:300px; height:30px;width:500px;" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
               
                </select>
            <br><br>
            <h3 style="margin-left:300px;"> Age</h3>
            <input type="text" name="age" id="age" placeholder="Enter Your Age" style="border:2px solid black; padding-left: 20px;padding-right:20px; margin-left:300px; height:30px;width:500px;">
            <br><br>
            <h3 style="margin-left:300px;"> Contact No.</h3>
            <input type="text" name="phone" id="phone" placeholder="Enter Your phone no." style="border:2px solid black; padding-left: 20px;padding-right:20px; margin-left:300px; height:30px;width:500px;">
   <br><br>
   <h3 style="margin-left:300px;">Enter Your Details</h3>
   <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here" style="border:2px solid black; padding: 30px; margin-left:300px; width:800px; border-radius:6px;"> </textarea>
   <br><br>
   <button class="btn" >Submit Your Response</button> 
        </form>
    </div>
    <script src="index.js"></script>

</body>
</html>
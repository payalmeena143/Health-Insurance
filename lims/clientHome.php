<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include'connection.php';
	
	$username = $_SESSION["username"];
?>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client's Status</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="index.php">HEALTH INSURANCE</a>
            </div>

            <div class="header-right">
			
                 <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                
								  <?php
									
										echo "welcome, ".$_SESSION["username"];
									
								?>
								
                            <br />
                              
                            </div>
                        </div>

                    </li>    
                     
                </ul>

            </div>
		

        </nav>
		 
		  
	
   
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Client's Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	
		
		$client_id = $_SESSION["username"];
	
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	   
	while($row = $result->fetch_assoc()) {
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"client_id\" placeholder=\"Your id..\" value=\"$row[client_id]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"sex\" placeholder=\"Your Gender..\" value=\"$row[sex]\">";
		echo "<label for=\"fname\">BIRTH DATE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\"Your Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"Your Address..\" value=\"$row[address]\">";
		echo "<label for=\"fname\">POLICY ID</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"Policy ID..\" value=\"$row[policy_id]\">";
		echo "<label for=\"fname\">RENEWAL DATE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"renewal_date\" placeholder=\"Renewal Date..\" value=\"$row[renewal_date]\">";
		$policy_id = $row["policy_id"];
		$c_id      = $row["client_id"];
		$agent_id  = $row["agent_id"];
		
    }
		echo "<br>\n";

	    echo "<br>\n";
	
	            // PRINTS policy info
	
	$sql = "SELECT policy_id,term,sum_insured,premium_rate,payment_method,coverage FROM policy where policy_id ='$policy_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>POLICY ID</th>\n";
    echo "    <th>TERM</th>\n";
    echo "    <th>SUM INSURED</th>\n";
    echo "    <th>PREMIUM RATE</th>\n";
	echo "    <th>PAYMENT METHOD</th>\n";
    echo "    <th>COVERAGE</th>\n";
    echo "  </tr>";
			
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["policy_id"]."</td>\n";
		echo "    <td>".$row["term"]."</td>\n";
		echo "    <td>".$row["sum_insured"]."</td>\n";
		echo "    <td>".$row["premium_rate"]."</td>\n";
		echo "    <td>".$row["payment_method"]."</td>\n";
		echo "    <td>".$row["coverage"]."</td>\n";
		
		
	}
	}
	?>
	</div>
	<?php
	
	echo "<br>\n";
	echo '<b>Policy Information</b>';
		            //   PRINTS AGEENTS INFO
	$sql = "SELECT agent_id, name ,branch, phone FROM agent where agent_id='$agent_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>AGENT ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BRANCH</th>\n";
    echo "    <th>PHONE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["agent_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["branch"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		
	}
	}
	
	echo "<br>\n";
	echo "<br>\n";
		echo '<b>Agent Information</b>';
	             // prints nominee infos 
	$sql = "SELECT * FROM claims where client_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>CLAIM ID</th>\n";
	echo "    <th>CLAIM DATE</th>\n";
    echo "    <th>DISEASE NAME</th>\n";
    echo "    <th>HOSPITAL NAME</th>\n";
	echo "    <th>STATUS</th>\n";
	echo "    <th>REASON</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["claim_id"]."</td>\n";
		echo "    <td>".$row["claim_date"]."</td>\n";
		echo "    <td>".$row["disease_name"]."</td>\n";
		echo "    <td>".$row["hospital_name"]."</td>\n";
		echo "    <td>".$row["status"]."</td>\n";
		echo "    <td>".$row["reason"]."</td>\n";
		$nominee_id = $row["claim_id"];
	
		
	}
	}
	echo "<br>\n";
	echo "<br>\n";
	echo '<b>Claims</b>';
                       //prints payments 
	$sql = "SELECT * FROM payment where client_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>RECIPT NO</th>\n";
    echo "    <th>CLIENT ID</th>\n";
    echo "    <th>MONTH</th>\n";
    echo "    <th>AMOUNT</th>\n";
	echo "    <th>DUE</th>\n";
    echo "    <th>FINE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["recipt_no"]."</td>\n";
		echo "    <td>".$row["client_id"]."</td>\n";
		echo "    <td>".$row["month"]."</td>\n";
		echo "    <td>".$row["amount"]."</td>\n";
		echo "    <td>".$row["due"]."</td>\n";
		echo "    <td>".$row["fine"]."</td>\n";

		
	}
	}
	echo "<br>\n";
	echo "<br>\n";
	echo '<b>Payments</b>';
	echo "</table>\n";

	
	
	

echo "\n";


$conn->close();	
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>

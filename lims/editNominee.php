<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 13px;
    margin: 3px 0;
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

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
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
    <title>Edit Claim</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Claim Information  
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
				
<?php 

   include'connection.php';
	
	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$claim_id = $_GET["claim_id"];	
	}
	
	$sql = "SELECT * from claims where claim_id='$claim_id'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updateNominee.php" method="post">';
	   
	while($row = $result->fetch_assoc()) {
		
		echo "<label for=\"fname\">CLAIM ID</label>";
	    echo "<input type=\"text\" claim_id=\"fname\" name=\"claim_id\" placeholder=\"claim id..\" value=\"$row[claim_id]\">";
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input type=\"text\" claim_id=\"fname\" name=\"client_id\" placeholder=\"client id..\" value=\"$row[client_id]\">";
		echo "<label for=\"fname\">CLAIM DATE</label>";
	    echo "<input type=\"text\" claim_id=\"fname\" name=\"claim_date\" placeholder=\"claim date..\" value=\"$row[claim_date]\">";
		echo "<label for=\"fname\">DISEASE NAME</label>";
		echo "<input type=\"text\" claim_id=\"fname\" name=\"disease_name\" placeholder=\"disease name..\" value=\"$row[disease_name]\">";
		echo "<label for=\"fname\">HOSPITAL NAME</label>";
		echo "<input type=\"text\" claim_id=\"fname\" name=\"hospital_name\" placeholder=\"hospital name..\" value=\"$row[hospital_name]\">";
		echo "<label for=\"fname\">STATUS</label>";
		echo "<input type=\"text\" claim_id=\"fname\" name=\"status\" placeholder=\"status..\" value=\"$row[status]\">";
		echo "<label for=\"fname\">REASON</label>";
		echo "<input type=\"text\" claim_id=\"fname\" name=\"reason\" placeholder=\"reason..\" value=\"$row[reason]\">";
		
    }
	
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deleteNominee.php?nominee_id=".$claim_id."'>Delete Nominee</a>";
	
	
	
echo "</div>\n";
echo "\n";

	
?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
   
	
</body>
</html>

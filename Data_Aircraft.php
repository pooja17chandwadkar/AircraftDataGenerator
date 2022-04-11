<?php
													/*	AUTHOR   : POOJA CHANDWADKAR
														COURSE 	 : DATABASE DESIGN AND WEB DEVELOPEMENT
														MIDTERM PROJECT  */


$a = $_POST['airmod'];

include 'aircraft.php';
$connDB = mysqli_connect("localhost", "root", "", "AerialFireFighting");
// Check connection


$RS = $connDB->query("SELECT * From aircraft  Where ACModel = '$a'");

if($RS->num_rows > 0) {
	while($row = $RS->fetch_assoc()) {

	$ARec = new Aircraft($row['ACModel'],$row['ACType'],$row['FlightSpeed'],$row['FuelCapacity'],$row['MissionRange'],$row['WaterCapacity']); 

	}

	mysqli_close($connDB);

	echo $ARec->displayAircraft();
} else {
	echo "No Data Available";
}



?>
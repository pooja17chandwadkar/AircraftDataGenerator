<?php
												/*	AUTHOR   : POOJA CHANDWADKAR
													COURSE : DATABASE DESIGN AND WEB DEVELOPEMENT
													MIDTERM PROJECT  */

$a = $_POST['airfID'];

include 'airfields.php';
$connDB = mysqli_connect("localhost", "root", "", "AerialFireFighting");
// Check connection


$RS = $connDB->query("SELECT * From airfield Where AFID = '$a'");

if($RS->num_rows > 0) {
	while($row = $RS->fetch_assoc()) {

		$ARec = new Airfields($row['AFID'],$row['Runways'],$row['Hangers'],$row['LOC_LAT'],$row['LOC_LONG'],$row['Image']); 

	}

	mysqli_close($connDB);

	echo $ARec->displayAirfield();

} else {
	echo "No Data Available";
}


?>
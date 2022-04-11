<?php
												/*	AUTHOR   : POOJA CHANDWADKAR
													COURSE 	 : DATABASE DESIGN AND WEB DEVELOPEMENT
													MIDTERM PROJECT  */

$a = $_POST['fID'];

include 'firetarget.php';
$connDB = mysqli_connect("localhost", "root", "", "AerialFireFighting");
// Check connection


$RS = $connDB->query("SELECT * From firetarget  Where FireID = '$a'");

if($RS->num_rows > 0) {
	while($row = $RS->fetch_assoc()) {

		$ARec = new FireTarget($row['FireNumber'],$row['FireID'],$row['FireLocation'],$row['FireStatus'],$row['FireSize']); 

	}

	mysqli_close($connDB);

	echo $ARec->displayFireTarget();

} else {
	echo "No Data Available";
}



?>
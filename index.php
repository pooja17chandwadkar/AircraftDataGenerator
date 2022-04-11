<!DOCTYPE html>
                                    <!-- AUTHOR   : POOJA CHANDWADKAR
                                          COURSE : DATABASE DESIGN AND WEB DEVELOPEMENT
                                          MIDTERM PROJECT               -->
<html>
<head>
<title>Fires</title>
</head>

<body>
<h1>Fires</h1> 

<form  action="Data_Fires.php" method="POST">
  <label for="fID">Fire ID</label><br>
  <input type="text" id="fID" name="fID"><br><br>
  <a href="Data_Fires.php"><input type="submit" value="Get Fire Data"></a>

</form>	

<h1>Airfields</h1> 

<form  action="Data_Airfields.php" method="POST">
  <label for="airfID">Air Field ID</label><br>
  <input type="text" id="airfID" name="airfID"><br><br>
  <a href="Data_Airfields.php"><input type="submit" value="Get Airfield Data"></a>
</form>	


<h1>Aircraft</h1> 

<form  action="Data_Aircraft.php" method="POST">
  <label for="airCMod">Aircraft Model</label><br>
  <input type="text" id="airmod" name="airmod"><br><br>
  <a href="Data_Aircraft.php"><input type="submit" value="Get Aircraft Data"></a>
</form>

</body>	
</html>
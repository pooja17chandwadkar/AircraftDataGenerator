<?php
                                  /*  AUTHOR   : POOJA CHANDWADKAR
                                        COURSE : DATABASE DESIGN AND WEB DEVELOPEMENT
                                        MIDTERM PROJECT  */
class Aircraft{
  
   
  public $model;
  public $type;
  public $flightSpd;
  public $fuelReq;
  public $missionRng;
  public $waterCap;

 
  #Constructor 
  function __construct($model,$type,$flightSpd,$fuelReq,$missionRng,$waterCap){

      
      $this ->model = $model;
      $this ->type = $type;
      $this ->flightSpd = $flightSpd;
      $this ->fuelReq = $fuelReq;
      $this ->missionRng = $missionRng;
      $this ->waterCap = $waterCap;


  }

      #1. displayAircraft
      function displayAircraft(){
        echo "<h1>Fire Fighting Aircraft</h1>";
        
    echo'<h3><font color="blue">Aircraft Model</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->model. '</font></h3>';
    echo'<h3><font color="blue">Aircraft Type</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">'  .$this->type. '</font></h3>';
    echo'<h3><font color="blue">Flight Speed</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->flightSpd. ' mph</font></h3>';
    echo'<h3><font color="blue">Fuel Capacity</font><BR> &nbsp &nbsp &nbsp &nbsp <font color = "red">' .$this->fuelReq.' lbs</font></h3>';
    echo'<h3><font color="blue">Mission Range</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">'.$this->missionRng.' miles</font></h3>';
  echo'<h3><font color="blue">Water Capacity</font><BR>&nbsp &nbsp &nbsp &nbsp <font color = "red">'.$this->waterCap.' gallons</font></h3>';

      }


  }

?>
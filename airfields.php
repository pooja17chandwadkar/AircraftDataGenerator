<?php
                                /*  AUTHOR   : POOJA CHANDWADKAR
                                    COURSE : DATABASE DESIGN AND WEB DEVELOPEMENT
                                          MIDTERM PROJECT  */

class Airfields {
  
  public $AFID;
  public $runways;
  public $hangers;
  public $L_lat;
  public $L_long;
  public $Image;

 
  #Constructor 
  function __construct($AFID,$runways,$hangers,$L_lat,$L_long,$Image){

      $this ->AFID = $AFID;
      $this ->runways = $runways;
      $this ->hangers = $hangers;
      $this ->L_lat = $L_lat;
      $this ->L_long = $L_long;
      $this ->Image = $Image;

  }


    #1. displayAirfield
      function displayAirfield(){
        
      echo "<h1>Fire Fighting Airfields</h1>";
      echo'<h3><font color="blue">Airfield ID Code</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->AFID. '</font></h3>';
      echo'<h3><font color="blue">Number of Runways</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">'  .$this->runways. '</font></h3>';
      echo'<h3><font color="blue">Number of Hangers</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->hangers. '</font></h3>';
      echo'<h3><font color="blue">Location:Latitude</font><BR> &nbsp &nbsp &nbsp &nbsp <font color = "red">' .$this->L_lat.'</font></h3>';
      echo'<h3><font color="blue">Location:Longitude</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">'.$this->L_long.'</font></h3>';
        

      }

  }

?>
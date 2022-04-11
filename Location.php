<?php
                                      /*  AUTHOR   : POOJA CHANDWADKAR
                                          COURSE   : DATABASE DESIGN AND WEB DEVELOPEMENT
                                          MIDTERM PROJECT  */

class Location{
  
  
  public $LID;
  public $vegetation;
  public $terrain;
  public $L_lat;
  public $L_long;
 

 
  #Constructor 
  function __construct($LID,$vegetation,$terrain,$L_lat,$L_long){

      $this ->LID = $LID;
      $this ->vegetation = $vegetation;
      $this ->terrain = $terrain;
      $this ->L_lat = $L_lat;
      $this ->L_long = $L_long;

  }


}

?>
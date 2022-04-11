<?php
                                          /*  AUTHOR   : POOJA CHANDWADKAR
                                              COURSE   : DATABASE DESIGN AND WEB DEVELOPEMENT
                                              MIDTERM PROJECT  */


class FireTarget{
  
  
  public $number;
  public $ID;
  public $location;
  public $status;
  public $size;
 

 
  #Constructor 
  function __construct($number,$ID,$location,$status,$size){

      $this ->number = $number;
      $this ->ID = $ID;
      $this ->location = $location;
      $this ->status = $status;
      $this ->size = $size;


  }


     #1. displayTargetedFires
      function displayFireTarget(){
        
      echo "<h1>Targeted Fires</h1>";
      echo'<h3><font color="blue">Fire Number</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->number. '</font></h3>';
      echo'<h3><font color="blue">Fire ID</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">'  .$this->ID. '</font></h3>';
      echo'<h3><font color="blue">Fire Location</font><BR> &nbsp &nbsp &nbsp &nbsp<font color = "red">' .$this->location. '</font></h3>';
      echo'<h3><font color="blue">Fire Status</font><BR> &nbsp &nbsp &nbsp &nbsp <font color = "red">' .$this->status.'</font></h3>';
      echo'<h3><font color="blue">Fire Size</font><BR>&nbsp &nbsp &nbsp &nbsp<font color = "red">'.$this->size.'</font></h3>';
        
      
      }

  }

?>
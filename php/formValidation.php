<?php
  $make=$year=$price=$MPG_city=$MPG_highway=$acceleration="";
  $DriveTrain_id=$occupant_id=$cylinder_id=$BodyModel_id="";
  $Horsepower_id=$resultsperpagevalue=$sortbyvalue="";
  $valueschecked = [];
  $submit = FALSE;
  //var_dump ($_POST);

  if(isset($_POST["make"])){
    //echo "Make: ".$_POST["make"]."<br/>";
    $make = ["make" => $_POST["make"]];
    $valueschecked = array_merge($valueschecked, $make);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["year"])){
    //echo "Year: ".$_POST["year"]."<br/>";
    $year = ["year" => $_POST["year"]];
    $valueschecked = array_merge($valueschecked, $year);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["price"])){
    //echo "price: ".$_POST["price"]."<br/>";
    $price = ["price" => $_POST["price"]];
    $valueschecked = array_merge($valueschecked, $price);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["MPG_highway"])){
    //echo "MPG Highway: ".$_POST["MPG_highway"]."<br/>";
    $MPG_highway = ["MPG_highway" => $_POST["MPG_highway"]];
    $valueschecked = array_merge($valueschecked, $MPG_highway);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["MPG_city"])){
    //echo "MPG City: ".$_POST["MPG_city"]."<br/>";
    $MPG_city = ["MPG_city" => $_POST["MPG_city"]];
    $valueschecked = array_merge($valueschecked, $MPG_city);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["60_time"])){
    //echo "Acceleration: ".$_POST["60_time"]."<br/>";
    $acceleration = ["60_time" => $_POST["60_time"]];
    $valueschecked = array_merge($valueschecked, $acceleration);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["DriveTrain_id"])){
    //echo "Drive Train: ".$_POST["DriveTrain_id"]."<br/>";
    $DriveTrain_id = ["DriveTrain_id" => $_POST["DriveTrain_id"]];
    $valueschecked = array_merge($valueschecked, $DriveTrain_id);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["occupant_id"])){
    //echo "Occupancy: ".$_POST["occupant_id"]."<br/>";
    $occupant_id = ["occupant_id" => $_POST["occupant_id"]];
    $valueschecked = array_merge($valueschecked, $occupant_id);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["cylinder_id"])){
    //echo "Cylinder: ".$_POST["cylinder_id"]."<br/>";
    $cylinder_id = ["cylinder_id" => $_POST["cylinder_id"]];
    $valueschecked = array_merge($valueschecked, $cylinder_id);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["BodyModel_id"])){
    //echo "Body Model: ".$_POST["BodyModel_id"]."<br/>";
    $BodyModel_id = ["BodyModel_id" => $_POST["BodyModel_id"]];
    $valueschecked = array_merge($valueschecked, $BodyModel_id);
    //print_r($valueschecked);
    $submit = TRUE;
  }
  if(isset($_POST["Horsepower_id"])){
    //echo "Horsepower: ".$_POST["Horsepower_id"]."<br/>";
    $Horsepower_id = ["Horsepower_id" => $_POST["Horsepower_id"]];
    $valueschecked = array_merge($valueschecked, $Horsepower_id);
    //print_r($valueschecked);
    $submit = TRUE;
  }

  //print_r($valueschecked);
  //echo "<br/>";

  if(isset($_POST["ResultsPerPageDropdown"])){
    //echo "Results Per Page: ".$_POST["ResultsPerPageDropdown"]."<br/>";
    $resultsperpagevalue = $_POST["ResultsPerPageDropdown"];
  }
  if(isset($_POST["SortByDropdown"])){
    //echo "Sort By: ".$_POST["SortByDropdown"]."<br/>";
    $sortbyvalue = $_POST["SortByDropdown"];
  }
 ?>

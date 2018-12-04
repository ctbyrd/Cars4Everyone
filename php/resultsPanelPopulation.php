<!-- Populates the results panel using information from the database
     TO DO: Formatting of the car_result
  -->
<!DOCTYPE html>
  <html>
  <head>
    <title>Cars4Everyone_Results</title>

    <!-- External Styling Sheets -->
    <link href="./css/GeneralLayout.css" type="text/css" rel="stylesheet"/>
    <link href="./css/ResultsPanelResults.css" type="text/css" rel="stylesheet"/>

  </head>

  <body>
  <?php

    include 'buildingQuery.php';
    include 'formValidation.php';

    if ($submit) {
      // echo "Values Checked: ";
      // print_r($valueschecked);
      // echo "<br/> Results: " + $resultsperpagevalue + "<br/>" + $sortbyvalue;
      $curr_query = currQuery($valueschecked, $sortbyvalue, $resultsperpagevalue);
    } else {
      $curr_query = "SELECT * from car";
    }
    // echo "Current Query: $curr_query";

    require('database.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
      die('ERROR NO DATABSE');
    }

    // echo "Printing ".$variable." values <br/>";
    //$sql = "SELECT * FROM car ;";
    // echo $sql."<br/>";
    $result = $conn->query($curr_query);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<div class=\"car_result\">";
        echo "<strong>Make: </strong>".$row["make"]."<br/>";
        echo "<strong>Model: </strong>".$row['model']."<br/>";
        echo "<strong>Year: </strong>".$row['year']."<br/>";
        echo "<strong>Price: </strong>".$row['price']."<br/>";
        echo "<strong>Body Style: </strong>".$row['BodyModel_id']."<br/>";
        echo "<strong>Occupancy: </strong>".$row['occupant_id']."<br/>";
        echo "<strong>City MPG: </strong>".$row['MPG_city']."<br/>";
        echo "<strong>Highway MPG: </strong>".$row['MPG_highway']."<br/>";
        echo "<strong>Acceleration: </strong>".$row['60_time']."<br/>";
        echo "<strong>Cylinder: </strong>".$row['cylinder_id']."<br/>";
        echo "<strong>Drivetrain: </strong>".$row['DriveTrain_id']."<br/>";
        echo "<strong>Horsepower: </strong>".$row['Horsepower_id']."<br/>";
        echo "</div>";
      }
    } else {
        echo "No Cars To Display.  Try Changing Your Search.";
    }
    $conn->close();

  ?>

</body>

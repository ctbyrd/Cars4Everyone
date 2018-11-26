<!-- Populates the results panel using information from the database
     TO DO: Formatting of the car_result
  -->
<?php
  function resultsPanelPopulation($sql) {

    require('database.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
      die('ERROR NO DATABSE');
    }

    // echo "Printing ".$variable." values <br/>";
    //$sql = "SELECT * FROM car ;";
    // echo $sql."<br/>";
    $result = $conn->query($sql);

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
        echo "0 results";
    }
    $conn->close();
  }

  function resultsPanelCount($sql) {
    require('database.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
      die('ERROR NO DATABSE');
    }

    $result = $conn->query($sql);
    echo $result->num_rows;
    $conn->close();
  }

?>

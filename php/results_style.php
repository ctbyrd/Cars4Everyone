
<?php
  function resultsTable($row){
    echo "<table>";
    echo "<div class=\"car_result\">";
    echo
    "<tr>
    <th> Make:</th>
    <th> Model:</th>
    <th> Year:</th>
    <th> Price:</th>
    <th> Body Style:</th>
    <th> Occupancy:</th>
    <th> MPG_City:</th>
    <th> MPG_Highway:</th>
    <th> 60s_Time:</th>
    <th> #cyclinders:</th>
    <th> Drivetrain:</th>
    <th> Horsepower:</th>
    </tr>";
    echo "</div>";
    echo "<tr>";
    echo "<td>".$row["make"]."</td><br/>";
    echo "<td>".$row['model']."</td><br/>";
    echo "<td>".$row["year"]."</td><br/>";
    echo "<td>".$row["price"]."</td><br/>";
    echo "<td>".$row["BodyModel_id"]."</td><br/>";
    echo "<td>".$row["occupant_id"]."</td><br/>";
    echo "<td>".$row["MPG_city"]."</td><br/>";
    echo "<td>".$row["MPG_highway"]."</td><br/>";
    echo "<td>".$row["60_time"]."</td><br/>";
    echo "<td>".$row["cylinder_id"]."</td><br/>";
    echo "<td>".$row["DriveTrain_id"]."</td><br/>";
    echo "<td>".$row["Horsepower_id"]."</td><br/>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
  }
?>

<!-- Populates the values for each category   -->
<!-- TO DO: Make the results interactive and responsive to already selected
            values
  -->
<?php
  function PopulateSearchPanel($variable, $query) {

    require('database.php');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
      die('ERROR NO DATABASE');
    }

    // echo "Printing ".$variable." values <br/>";
    $sql = "SELECT ". $variable .", count(".$variable.") FROM (".$query.
            ") sub GROUP BY ".$variable." ORDER BY ".$variable.";";
    //echo $sql."<br/>";
    $result = $conn->query($sql);
    $count_column_header = "count(".$variable.")";
    //echo $count_column_header;
    if ($result->num_rows > 0) {
      // output data of each row
      $index=0;
      while($row = $result->fetch_assoc()) {
        $output = $output."<input checked type=\"checkbox\" \"class=\"searchOption\" name=\"".$variable."[]\" value=\"".$row[$variable]."\"><label>".$row[$variable]." (".$row[$count_column_header].")</label><br/>
        ";
        //onchange=\"hasBeenCheck(this)\"
        // echo "<input class=\"searchOption\">";
        // echo "<div id=\"".$variable.$index."\">".$row[$variable]." </div>";
        // echo "<div id=\"".$variable.$index."_count\"> (".$row[$count_column_header].") </div>";
        // echo "</button>";
        $index = $index + 1;
      }
    } else {
        $output = "0 results";
    }
    return $output;
    $conn->close();
  }

?>

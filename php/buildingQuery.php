<!--
  Creates formated current query:
  SQL 1: SELECT * from car
  SQL 2: WHERE variable in ("opt1", "opt2")
               variable2 in ("opt1", "opt2")
  SQL 3: ORDER BY sortbyvalue
  SQL 4: LIMIT resultsperpagevalue;
 -->
<?php
  function currQuery ($valueschecked, $sortbyvalue, $resultsperpagevalue){
    // SQL 1
    $select = "SELECT * from car ";

    // SQL 2
    $where = "";
    $notempty = FALSE;

    $keyloop_count = count(array_keys($valueschecked));
    // echo "Key Array Count:".$keyloop_count;
    foreach (array_keys($valueschecked) as $key){
      $notempty = TRUE;
      $where = $where.$key." in (";

      $loop_count = count($valueschecked[$key]) - 1;
      if ($loop_count == 0) {
        $where = $where."\"".$valueschecked[$key]."\") ";
      } else {
        for ($i = 0; $i < $loop_count; $i++) {
          $where = $where."\"".$valueschecked[$key][$i]."\", ";
        }
        $where = $where."\"".$valueschecked[$key][$loop_count]."\") ";
      }
      if ($keyloop_count==1 || $keyloop_counter == $keyloop_count-1) {
        break;
      }
      $where = $where." && ";
      //echo "Key Count: $keyloop_counter <br/>";
      $keyloop_counter += 1;
    }
    if ($notempty) {
      $where = "WHERE $where ";
    }

    // SQL 3
    $order = "ORDER BY $sortbyvalue ";

    // SQL 4
    $limit = "";
    if ($resultsperpagevalue != 99) {
      $limit = "LIMIT ".$resultsperpagevalue;
    }

    // Full SQL query
    $curr_query = $select.$where.$order.$limit.";";
    $curr_query_escaped = addslashes($curr_query);
    //echo $curr_query_escaped;
    //echo "<script>alert(\"$curr_query_escaped\");</script>";
    return $curr_query;
  }
?>

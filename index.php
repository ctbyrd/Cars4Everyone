<!DOCTYPE html>
  <html>
  <head>
    <title>Cars4Everyone</title>

    <style>
      /* Internal Style */
    </style>

    <!-- External Styling Sheets -->
    <!--<link href="./css/Cars4Everyone_Styles.css" type="text/css" rel="stylesheet"/>-->
    <link href="./css/GeneralLayout.css" type="text/css" rel="stylesheet"/>
    <link href="./css/SearchPanel.css" type="text/css" rel="stylesheet"/>
    <link href="./css/ResultsPanelHeader.css" type="text/css" rel="stylesheet"/>
    <link href="./css/ResultsPanelResults.css" type="text/css" rel="stylesheet"/>

  </head>

  <body>
    <!-- Files with php Functions -->
    <!-- TO DO:
         Consolidate into one file (?)
      -->
    <?php
      //Function to populate search panel options
      include 'php/searchPanelPopulation.php';
      //Function to populate results panel
      include 'php/resultsPanelPopulation.php';
      //Variable to hold the current query
      $curr_query = "SELECT * from car";
    ?>
    <!-- Top Area -->
    <div id = "PageHeader">
      <!-- Possibly replace with a logo image -->
      <div id = "TopLogo">Cars4Everyone</div>
    </div>
    <hr/>
    <!-- Body Portion of Website -->
    <div id = "PageBodyContainer">
      <!-- Includes Search Panel and Filters for Customers to Tailor Their Results -->
      <div id = "BodySearchPanel">
        <!-- Container Header, Possible allow users to hover for instructions (?) -->
        <div class="BodyPanelHeader" id = "SearchPanelHeader">(Search Options)</div>
        <!-- Portions with Buttons to Signal the User Wants the Query Changed -->
        <div id = "BodyPanelButtons">
          <!-- TO DO: Positioning of this line -->
          <!-- TO DO: Trigger Event -> Add Selected Parameters to Query and
               Send it to the Database to Receive Results
               $curr_query =
               "SELECT * FROM cars
                WHERE variable1 in (options1) &&
                      variable2 in (options2)"
             -->
          <input type= 'submit' value="submit" id = "SearchButton" class = "PanelHeader" >Search</input>
          <!-- TO DO: Trigger Event -> Remove Parameters and
               Request All Cars from the Database
               New SQL: "SELECT * FROM cars;"
            -->
          <button id = "ResetButton" class = "PanelHeader">Reset</button>
        </div>
        <!-- Collapsing Filters for Results -->
        <div id = "FilterContainer">
          <!-- TO DO: Get values that are selected-->
          <button class="accordion" id = "MakeFilter">Make</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="MakeFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("make", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "ModelFilter">Model</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="ModelFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("model", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "YearFilter">Year</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="YearFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("year", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "PriceFilter">Price</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="PriceFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("price", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "CityMPGFilter">City MPG</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="CityMPGFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("MPG_city", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "HighwayMPGFilter">Highway MPG</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="HighwayMPGFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("MPG_highway", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "AccelerationFilter">Acceleration</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="AccelerationFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("60_time", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "DrivetrainFilter">Drivetrain</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="DrivetrainFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("DriveTrain_id", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "OccupancyFilter">Occupancy</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="OccupancyFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("occupant_id", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "CylinderFilter">Cylinder</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="CylinderFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("cylinder_id", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "BodyStyleFilter">Body Style</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="BodyStyleFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("BodyModel_id", $curr_query);
              ?>
            </ul>
          </form>
          <button class="accordion" id = "HorsepowerFilter">Horsepower</button>
          <!-- Populates results using php -->
          <form method="post" action="index.php" onsubmit="onsubmit()" class="panel" id="HorsePowerFilterOptions">
            <ul>
              <?php
                PopulateSearchPanel("Horsepower_id", $curr_query);
              ?>
            </ul>
          </form>
        </div>
      </div>
      <div class="in-line" id = "BodyResultsPanel">
        <div class = "BodyPanelHeader" id="ResultsPanelHeader">(Search Results)</div>
        <!-- TO DO: Positioning of this line in the HTML view -->
        <div class = "PanelHeader" id = "ResultsHeader">
          <!-- Populate with results meeting criteria -->
          <div class="PanelHeaders" id="NumberOfCarResults">
            <!--####-->
            <!-- TO DO: Change value when query changes-->
            <?php
              resultsPanelCount($curr_query);
            ?>
          </div>
          <div class="PanelHeaders">cars meet your requirements</div>
          <div class="PanelHeaders">Cars per page</div>
          <!--Dropdown for cars per page -->
          <div class="PanelHeaders">
            <div class="dropdown">
              <!-- TO DO: Change Value of LIMIT for results in CarsResultContainer
                  SQL Query: "LIMIT <value>"
                -->
              <button onclick="ResultsPerPageDropdown()" class="dropbtn">5</button>
              <div id="ResultsPerPageDropdown" class="dropdown-content">
                <a value="5">5</a>
                <a value="10">10</a>
                <a value="15">15</a>
                <a value="20">20</a>
              </div>
            </div>
          </div>
          <div class="PanelHeaders">Sort By</div>
          <!--Dropdown for sort by -->
          <div class="PanelHeaders">
            <div class="dropdown">
              <!-- TO DO:  Change value of ORDER BY for results in CarsResultContainer
                   SQL Query: "ORDER BY SortByDropdownValue"
                -->
              <button onclick="SortByDropdown()" class="dropbtn" value="make">Make</button>
              <div id="SortByDropdown" class="dropdown-content">
                <a value="make">Make</a>
                <a value="model">Model</a>
                <a value="year">Year</a>
                <a value="price">Price</a>
                <a value="MPG_city">City MPG</a>
                <a value="MPG_highway">Highway MPG</a>
                <a value="60_time">Acceleration</a>
                <a value="DriveTrain_id">Drivetrain</a>
                <a value="cylinder_id">Cylinder</a>
                <a value="occupant_id">Occupancy</a>
                <a value="BodyModel_id">Body Model</a>
                <a value="Horsepower_id">Horsepower</a>
              </div>
            </div>
          </div>
        </div>
        <hr/>
        <!-- Populate using PHP -->
        <div class = "CarResultContainer">
          <div>
            <?php
              /* TO DO: Change to current query */
              $query = "SELECT * FROM car ;";
              resultsPanelPopulation($query);
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- TO DO: Fix CSS (Note in Banner_Styles.css)-->
    <div id = "PageFooter">
      <hr/>
      <div id = "FooterText">This website is being used for educational purposes.</div>
    </div>
  </body>

  <!-- External javascripts -->
  <script src="./javascript/accordion.js"></script>
  <script src="./javascript/dropdowns.js"></script>

  <script>
    /* Internal Javascripts */
  </script>

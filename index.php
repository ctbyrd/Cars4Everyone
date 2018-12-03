<!DOCTYPE html>
  <html>
  <head>
    <title>Cars4Everyone</title>

    <style>
      /* Internal Style */
    </style>

    <!-- External Styling Sheets -->
    <link href="./css/GeneralLayout.css" type="text/css" rel="stylesheet"/>
    <link href="./css/SearchPanel.css" type="text/css" rel="stylesheet"/>
    <link href="./css/ResultsPanelHeader.css" type="text/css" rel="stylesheet"/>

  </head>

  <body>
    <!-- Files with php Functions -->
    <?php
      //Function to populate search panel options
      include 'php/searchPanelPopulation.php';
      //Variable to hold the current query
      $curr_query = "SELECT * from car";
    ?>
    <!-- Top Area -->
    <div id = "PageHeader">
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
          <form name="form" id="submitButtonForm" method="POST" action="php/resultsPanelPopulation.php" target="results_panel">
            <input type= 'submit' value="Search" id = "SearchButton" class = "PanelHeader"></input>
            <!-- TO DO: Trigger Event -> Remove Parameters and
                Request All Cars from the Database
                New SQL: "SELECT * FROM cars;"
              -->
            <button id = "ResetButton" class = "PanelHeader">Reset</button>
        </div>
        <!-- Collapsing Filters for Results -->
        <div id = "FilterContainer">
          <!-- TO DO: Get values that are selected-->
          <button type="button" class="accordion" id = "MakeFilter">Make</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("make", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "YearFilter">Year</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("year", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "PriceFilter">Price</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("price", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "CityMPGFilter">City MPG</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("MPG_city", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "HighwayMPGFilter">Highway MPG</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("MPG_highway", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "AccelerationFilter">Acceleration</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("60_time", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "DrivetrainFilter">Drivetrain</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("DriveTrain_id", $curr_query);
            ?>
          </ul>
          <!-- </form> -->
          <button type="button" class="accordion" id = "OccupancyFilter">Occupancy</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("occupant_id", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "CylinderFilter">Cylinder</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("cylinder_id", $curr_query);
            ?>
          </ul>
          <button type="button" class="accordion" id = "BodyStyleFilter">Body Style</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("BodyModel_id", $curr_query);
            ?>
          </ul>
          <!-- </form> -->
          <button type="button" class="accordion" id = "HorsepowerFilter">Horsepower</button>
          <!-- Populates results using php -->
          <ul>
            <?php
              echo PopulateSearchPanel("Horsepower_id", $curr_query);
            ?>
          </ul>
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
              //resultsPanelCount($curr_query);
            ?>
          </div>
          <div class="PanelHeaders">cars meet your requirements</div>
          <div class="PanelHeaders">Cars per page</div>
          <!--Dropdown for cars per page -->
          <div class="PanelHeaders">
            <div class="dropdown">
              <select name="ResultsPerPageDropdown" id="ResultsPerPageDropdown" onchange="ResultsPerPageDropdownChange(this)">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option selected value="99">All</option>
              </select>
            </div>
          </div>
          <div class="PanelHeaders">Sort By</div>
          <!--Dropdown for sort by -->
          <div class="PanelHeaders">
            <div class="dropdown">
              <select name="SortByDropdown" id="SortByDropdown" onchange="SortByDropdownChange(this)">
                <option selected value="make">Make</option>
                <option value="model">Model</option>
                <option value="year">Year</option>
                <option value="price">Price</option>
                <option value="MPG_city">City MPG</option>
                <option value="MPG_highway">Highway MPG</option>
                <option value="60_time">Acceleration</option>
                <option value="DriveTrain_id">Drivetrain</option>
                <option value="cylinder_id">Cylinder</option>
                <option value="occupant_id">Occupancy</option>
                <option value="BodyModel_id">Body Model</option>
                <option value="Horsepower_id">Horsepower</option>
              </select>
            </div>
          </div>
        </div>
      </form>
      <hr/>
      <!-- Populate using PHP -->
      <div class = "CarResultContainer">
        <iframe name="results_panel" src='php/resultsPanelPopulation.php'></iframe>
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
  <script>
    /* Internal Javascripts */
  </script>

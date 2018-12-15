### Cars4Everyone: User Manual
##### INST377 Fall 2018 || University of Maryland, College Park

To access the online application, refer to the website URL provided in the project report.
This URL will be active until December 31st, 2018. For questions and comments, please refer
to the contact information at the bottom of the page.

##### Purpose

The purpose of this application is to serve as a proof of concept of a CRUD application
implemented through a cloud virtual server. Not all functions are completed and have functionality.

##### Search Parameterization

To use this application, parameterize your search functions based on the following factors:
- Make: The make of the vehicle is the brand of the vehicle you're interested in potentially purchasing.
The current available options are:
  - BMW
  - Chevy
  - Ford
  - Honda
  - Mercedes Benz
  - Subaru
  - Toyota
  
###### As a proof of concept, we suggest removing one or more make(s) before executing the search to demonstrate the functionality.

- Year: range from 1999-2018
- Price: in USD
- City MPG: in miles per gallon
- Highway MPG: in miles per gallon
- Acceleration: 0-60 times
- Drivetrain: These are encoded as follows:
  - 1,'AWD','An all-wheel-Drive vehicle has a powertrain capable of providing power to all of its wheels.
  - 2,'4WD','A 4-wheel drive has a power train that is capable of powering all 4 wheels at DIFFERENT speeds.
  - 3,'RWD','A rear-wheel drive vehicle has powertrain that only provides power to the rear wheels.
  - 4,'FWD','A front-wheel drive car has a drive train that can provide power to the front wheels.
- Occupancy: in # of passengers + the driver.
- Cylinders: These are encoded as follows:
  - 1, '4 cylinder'
  - 2, '6 cylinder'
  - 3, '8 cylinder'
- Body Style: These are encoded as follows:
  - 1,'sedan'
  - 2,'coupe'
  - 3,'cross over'
  - 4,'truck'
  - 5,'SUV'
- Horsepower: These are encoded using a range with an interval of 50, indexed at 0.
  - Example: "2" is 50 horsepower. "8" is 350 horsepower. "13" is 600 horsepower.
  
##### Navigation

- The aforementioned categories can be displayed by clicking the "+" symbol next to the category. This will
provide a drop down showing the options that are available to select for each category. Selections can be made by checking or
unchecking the boxes. 
- After making a selection, pressing "search" button on the top left will execute a search.
- The "cars per page" can be increased or decreased by using the drop down values
- Returned values can be sorted based on the aforementioned categories. Use the "sort by" drop down to achieve this.

##### Support/Contact
| Team Member | Contact |
|---|---|
|Cameron Byrd| [github](https://github.com/ctbyrd)
|Nicholas Fuster| [github](https://github.com/nfuster2017)
|Brianna Higgins| [github](https://github.com/bhiggi12)
|Luan Pham|[github](https://github.com/luanclone)
|Troy Roundtree|[github](https://github.com/troundtr)



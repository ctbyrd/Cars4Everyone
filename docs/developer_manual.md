The structure of the web application was built locally on our teams local machines. We developed and tested our code locally on the AMPPS server, which runs our PHP server and mySQL server. We then cloned the git hub repo to the AWS instance to be able to run our code on the server. The AWS instance is running the web application through a downloaded sql database and a main index.php file, which is read first by the Directory Index.

Software/libraries:

1. PHP
2. Javascript
3. HTML
4. JSON
5. mySQL
6. CSS

File Structure:

On the github repo, the file system is divided into folders based on file type. On the server itself, the files are stored in both the var/www/html directory and in the home directory. The files in the html folder are able to be run on the server.

Downloaded on the Server:

1. Ubuntu 18.04.1
2. MySQL database
3. Git repository
4. Configuration Files for database connection
5. Native linux commands
6. Sudo permission on the Files

Database Structure:

1. Six Tables
  a. Horsepower
  b. Body Model
  c. Drive Train
  d. Car
  e. Cylinder
  f. Occupancy

The data base structure used six tables to interact with the server. Depending on what the user inputs on the website GUI, the request will be made to the database and it will return the information in the server side code(PHP). The data base dump file was used to make a new database on the server itself so that we would not need to access it remotely. In the future, it would be an important thing to add to be able to pull data remotely and not have to physically back it up every time someone makes a change to the database.

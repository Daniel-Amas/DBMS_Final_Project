# DBMS_Final_Project
## Running the Database
### 1) Download mysql and mysql workbench
Make sure sql is running on your computer, and you have mysql workbench installed to maniplulate the database
### 3) Download the sql file
In the file book-store-database download Book_Database.
### 4) Create connection in mysql workbench and create a datbase
Create a connection by clicking this button
Once your connection is created, now create a database. Make sure you name it book_store_database.
### 5) Import the sql file
In your database import the downloaded sql file.
Go to Server>>Data Import
Select "Import from Self-Contained File" then select the loaction as the destination of your downloaded sql file.
Then start the import.
After that your database should be populated with 7 tables and 10 views.
## Running the the website
## For this example we will be using XXAMP to locally host the site
### 1) Download XAMPP and make sure it is running
Start the Apache module.
### 2) Download the project from github
Save the project in your XAMPP folder
xampp>>htdocs>>Yourfile
Where Yourfile is a name of the project
### 3) Enter your database information
Find the file functions.php, at the top enter your information for your mysql server
### 4) Run the site
In your browser search "http://localhost/Yourfile/index.php"
Again Yourfile is the dile where you stored the project in htdocs
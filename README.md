# DBMS_Final_Project
## Running the Database
### 1) Download mysql and mysql workbench
Make sure sql is running on your computer, and you have mysql workbench installed to maniplulate the database
![image](https://user-images.githubusercontent.com/94157031/204951178-d01fcdfe-21fa-46ea-b700-55c0f24f7b61.png)

### 3) Download the sql file
In the file book-store-database download Book_Database.
![image](https://user-images.githubusercontent.com/94157031/204951222-6b5e4832-a548-4a60-9043-62a2f07b2ac8.png)

### 4) Create connection in mysql workbench and create a datbase
Create a connection by clicking this button
Once your connection is created, now create a database. Make sure you name it book_store_database.
![image](https://user-images.githubusercontent.com/94157031/204951275-d025fa36-0dbb-45c4-88d5-e26fba96b5e5.png)

### 5) Import the sql file
In your database import the downloaded sql file.
Go to Server>>Data Import
Select "Import from Self-Contained File" then select the loaction as the destination of your downloaded sql file.
Then start the import.
After that your database should be populated with 7 tables and 10 views.
![image](https://user-images.githubusercontent.com/94157031/204951366-a1789d95-1966-4c0e-8111-91c9921ceaaa.png)
![image](https://user-images.githubusercontent.com/94157031/204951409-bf42d9ad-0cff-4cdc-a77b-7c4d19cf025c.png)

## Running the the website
## For this example we will be using XXAMP to locally host the site
### 1) Download XAMPP and make sure it is running
Start the Apache module.
![image](https://user-images.githubusercontent.com/94157031/204951441-cda55d47-47bf-4b2a-9c91-72dbd099bf3f.png)

### 2) Download the project from github
Save the project in your XAMPP folder
xampp>>htdocs>>Yourfile
Where Yourfile is a name of the project
![image](https://user-images.githubusercontent.com/94157031/204951508-3fe5e6b5-d19c-4400-93c4-ec24c19fe0dd.png)

### 3) Enter your database information
Find the file functions.php, at the top enter your information for your mysql server
![image](https://user-images.githubusercontent.com/94157031/204951566-ac5cc592-fcf3-4a3b-a840-5711b131faaf.png)

### 4) Run the site
In your browser search "http://localhost/Yourfile/index.php"
Again Yourfile is the dile where you stored the project in htdocs
![image](https://user-images.githubusercontent.com/94157031/204951670-ab880c2a-8230-4a90-a626-7a1779e1d34a.png)
To access the Owner view to add books enter "In your browser search "http://localhost/Yourfile/bookAdd.php" 
![image](https://user-images.githubusercontent.com/94157031/205098529-fbb1035a-fda4-45a1-87cd-ad5a856c4bc9.png)


# Broadway Show Database Project

## Description
The Broadway Show Database is a dynamic web application designed to serve as a comprehensive repository for various Broadway shows. Built using PHP, Java, and MySQL, this database provides a holistic platform for both users and administrators to interact with extensive Broadway show data.

## Features:
Admin Interface:
Data Management: Administrators have the capability to add, remove, or update existing records in the database.
Advanced SQL Functions: The system is equipped with several SQL functions that cater to diverse requirements:
Search for Cast and Crew based on Show Name, Position, and/or Gender.
Search for Shows based on Price/Genre and view shows ranked by their price.
Search Shows by their Release Date.
Look up Theaters based on their seating capacity.
Find Cast and Crew members using their names.
While these functionalities are mainly provided in the admin interface, they can be seamlessly implemented in the user interface.

User Interface:
Show Details: Users can view individual Broadway shows along with a detailed description.
Ticketing System: Integrated ticket searching based on start and end dates, and a purchase system that dynamically updates ticket availability in real-time.
Comprehensive Search: Users can search shows based on various attributes, including ticket details.

## Schema Visualization:
Below is an image showcasing the database schema:
![Database Schema]([https://github.com/yourusername/yourrepositoryname/blob/main/images/yourimagename.png](https://github.com/oteomamo/Broadway_Shows_Database/blob/main/DatabaseSchema.png))


Shows(**show id**, names, release_date, genre)

Ticket Sales(**ticket number**, time, date, number_of_tickets, price, theater_id)

Cast/Crew(**SSN**, name, working_position, gender, theater_id, show_id)

Theater(**address**, name, address, number_of_seats)


## Run and Test the Database

The database was realized through PHP, with phpMyAdmin as the host. Connectivity between PHP and the database was facilitated using XAMPP. The front-end was crafted using HTML, CSS, and Java, with distinct interfaces for admins and regular users. The user interface interacts with the MySQL server via PHP, with HTML forms capturing user input. The backend processes user queries and serves results through the front-end, ensuring seamless operation.

Prerequisites:
MySQL
XAMPP
PHP
Steps:
Ensure you have MySQL, XAMPP, and PHP installed on your machine.
Clone/download the repository to your local machine.
Place the project files in the specific folder within your XAMPP installation (usually the htdocs folder).
Update the host details within the project files as per your local setup.
Start the Apache and MySQL modules through the XAMPP control panel.
Open a web browser and access http://localhost/[path-to-your-project-folder] to start using the Broadway Show Database.

## Purpose:
This project was developed as a testament to my expertise in crafting and managing database systems using PHP and SQL. It not only underscores my proficiency in database design and management but also highlights my understanding and practical application of SQL.

<h3 align="left">Languages and Tools:</h3>
<p align="left"> <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://www.java.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="java" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>

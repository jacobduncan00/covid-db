# Salisbury University COVID-19 Database Interface - COSC 386 Semester Project by Jacob Duncan

# Features

### Insert
- Select the type of University personnel you are, based off your selection from the dropdown menu, the fields will change on the form. Fill out the form with the required information. Click the submit button and the information will be stored in our SU COVID-19 Database hosted on the Acadweb server using MySQL.

### Search
- Search the SU COVID-19 Database by typing the name of a University personnel and live results will appear giving you general information about that person aswell as their most recent COVID test date and result. The color of their card corresponds to their COVID-19 result which can be matched with the colors in the legend in the top right of the search page.

### Admin
- Ability to insert, delete, and update entries in the SU COVID-19 Database. A easy to use interface that allows users to quickly change and manipulate the data within the database without have to write any queries or touch MySQL.

### Contact
- Write a message to the developers with either feedback, questions, reviews, or bug reports.

### FAQ 
- A general synopsis of the project and the technology that goes into it as well as information about current COVID-19 news.

### Stats
- Stats about the database including total number of entries in the University_personnel table as well as the amount of people positive / negative and the number of students, faculty, and staff in the database as well. 

### Update
- Incremental search for an ID in the database, if ID found, render the form for the user to fill out with the updated information. The form that is rendered is has placeholders that match the data matching the ID that was inserted therefore it is easier for the user to see what the data was for that user before they are changing it. 

### Delete
- Complex delete that traverses the tables in the database and strategically deletes the primary / foreign key ID from each of the child tables of University_personnel table before deleting it from the University_personnel table.

# Admin Logins
- Username: jduncan5
- Password: password

- Username: jing
- Password: admin

# Progress Report

### 11/10
- Created the routes
- Brainstormed the navbar

### 11/12
- Finalized navbar
- Added navbar to each page
- Started researching PHP sessions

### 11/13
- Brainstormed the insert form
- Found picture to add as the landing page on home
- Finalized homepage

### 11/15
- Filled DB with dummy data to test
- Wrote queries to get information from DB
- Figured out how to post info from /insert to DB
- Got sessions to work

### 11/23 
- Redesigned /insert /search and /contact
- Added the rest of the fields to the /insert
- Figured out how to dynamically change form

### 12/2
- Completely redesign website
- Complications with PHP and MySQL
- Started working on Admin Page

### 12/7
- Still working on Admin page
- Added favicon in the tab bar
- Changed all links in navbar to consider sessions
- Added legend on /insert page
- Figured out how CSS grid works and used on /insert and /search
- Added step-by-step instructions on /insert page

## 12/8 & 12/9
- Added full functionality to admin page
- Created updating entries
- Created deleting entries
- Final changes to website
- Finished styling some parts of website
- Bug fixes
- QOL checks


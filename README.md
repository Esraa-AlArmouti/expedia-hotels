# Expedia Task 

Demo site for expedia.com, which represnt the latest offers.

### New Features:

  - Responsive site.
  - Search for latest offers (Destination name,Lenght of stay, Travel start/end date, Rating and etc).

### Technology
The used technologies for Expedia hotel deals search process as the following:

  - Windows 10 operating system
  - PHP 5.6.28. "http://windows.php.net/download" 
  - Apache by using Xampp server, if it doesn't exist download it from https://www.apachefriends.org/download.html
  - Bootstrap 3.3.7 5. jquery 1.12.4 6. jquery-ui for date picker

### Project structure

  - Assets includes the following: css files such as bootstrap to give nice style and to make it responsive, jquery-ui to give date picker styles correctly and styles to put my own styles in it.
  - fonts it contains all fonts needed in bootstrap.
  -  js it contains jquery version 1.12.4 to activate bootstrap and it's commonly used and required for making the job done in every web project. jquery-ui to activate date picker. bootstrap file to add all given events by bootstrap. customScript it's used to add my own javascript commands
  -  config folder contains configration.php file to verify base json url and views for my project.
  -  core folder contains the actual procedures needed for this project, it has two classes; request class to request json url and to get all it's data it also has the method to run the filtering result and get all the data for it. Helpers class contains search method to store all search data and to call request class. the whole process will be explain in about.md file.
  -  views folder contains all the frond end files that is shown for the user. header it contains all files needed in this project for styling. form file it has the search form that the user enter the search data in it. result folder it list all the result data for searching process. footer it includes all javascript files that is needed for this project
  -  index.php file has the structure of the default page for this project.
  -  search.php file it is the destination page for form action file. it is where the search method is called.


### Deployment steps:

  - download php 5.6.2+ id it doesn't exist from: http://windows.php.net/download#php-5.6.
  - I recommend to use SmartGit program to clone Expedia hotel deals website. 
  - windows 7+ operating system.
  - Apache server, I recommend Xammp server, if it doesn't exist download it from https://www.apachefriends.org/download.html.
  - Clone repository "https://github.com/Esraa-AlArmouti/expedia-hotels" in windows at Xampp/htdocs folder and create new folder there.

### Testing:

  - When you running the site "http://yourhostOrIp/", the first view will allow you to search for latest offers, for e.g. enter the Destination name miami then click on search button,
The result page will let you see Expedia offers for miami destination.

### Todos

 - Use PHP templating engine.
 - Create a listing page for latest offers "Without seraching".
The used technologies for Expedia hotel deals search process as the following:
1. Windows 10 operating system.
2. PHP 5.6.28.
3. Apache by using Xampp server, if it doesn't exist download it from https://www.apachefriends.org/download.html
4. Bootstrap 3.3.7
5. jquery 1.12.4
6. jquery-ui for date picker.

Project structure:
1. Assets includes the following:
    css files such as bootstrap to give nice style and to make it responsive, jquery-ui to give date picker styles correctly and styles to put my own styles in it.
2. fonts
    it contains all fonts needed in bootstrap.
3. js
    it contains jquery version 1.12.4 to activate bootstrap and it's commonly used and required for making the job done in every web project.
    jquery-ui to activate date picker.
    bootstrap file to add all given events by bootstrap.
    customScript it's used to add my own javascript commands.
4. config folder contains configration.php file to verify base json url and views for my project.
5. core folder contains the actual procedures needed for this project, it has two classes; request class to request json url and to get all it's data it also has the method to run the filtering result and get all the data for it. 
    Helpers class contains search method to store all search data and to call request class. the whole process will be explain in about.md file.
6. views folder contains all the frond end files that is shown for the user. 
    header it contains all files needed in this project for styling.
    form file it has the search form that the user enter the search data in it.
    result folder it list all the result data for searching process.
    footer it includes all javascript files that is needed for this project.
7. index.php file has the structure of the default page for this project.
8. search.php file it is the destination page for form action file. it is where the search method is called.

deployment:
1. download php 5.6.2+ id it doesn't exist from: http://windows.php.net/download#php-5.6
2. I recommend to use SmartGit program to clone Expedia hotel deals website.
3. windows 7+ operating system.
4. Apache server, I recommend Xammp server, if it doesn't exist download it from https://www.apachefriends.org/download.html
5. Clone repository "https://github.com/Esraa-AlArmouti/expedia-hotels" in windows at Xampp/htdocs folder and create new folder there.

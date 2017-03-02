My assumption for Expedia hotel deals project declares by getting all search data from form.php and searching for it by requesting
URL that is already build from the search data and get all the resault and show it in resault.php file at the destination file search.php 

Expedia hotel deals project works as the following:
1. creating the structure for default page and prepare form.php file to put all search values in it's fields and to direct the result for search process to search.php page.
2. search process will be done according to the given certain query parameters which is already has it's fields in form.php and they are the following:
    destinationName
    regionIds
    minTripStartDate
    maxTripStartDate
    lengthOfStay
    minStarRating
    maxStarRating
    minTotalRate
    maxTotalRate
    minGuestRating
    maxGuestRating
3. config/configuration.php file declares all needed information there, such as baseURL that will be needed at request class.
4. after entering the wanted search data to look for, the form will direct user to search.php page, search.php will call search method at helpers class and it will store it in $filtered_data variable and it takes all post data for the form. $filtered_data will be listed with it's data at resault.php file.
5. At helpers class it contains search method that receive search wanted data, search method contains a $defaultParams variable that has the default parameters that will be called in the requested URL. This method will check if the received data not empty to continue on requesting action. it will create an object from request class.
6. Request class has a property called baseUrl that will take baseUrl from configuration.php file from it's array.
7. back to step 5 after creating an object from request class type it will check each filled field from the form and it will put it in an array called $urlParameters, $urlParameters will be merged with $filtered_data array and it will be stored in $finalParams, the merge step is done because json url won't give a result if the default parameters is not sent by url request.
8. after saving all wanted data it will call run method for request class object. run method will receive the $urlParameters from doing step 7. run method will check if the received array is not empty and it will build request url using http_build_query finction that is already given from php.
   it will put the baseUrl with the built URL, then it will request to URL using file_get_contents function from php and return the decoded json file to request class object and it will be stored in $result variable.
9. after that it will check if $result is not empty and if it contains offers and Hotel objects inside it, if it's true return the result of $result->offers->Hotel objects to store it in $filtered_data in search.php file
10. all stored data will be listed in result.php file and if it has no result it will show a message that the search for hotel deals are not found.

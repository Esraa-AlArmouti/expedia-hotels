This application is created for finding the best hotel deals, so I created a form that makes the user put his/her given information
and the form will search the local Jason file instead of requesting a Jason URL to find the result.
My point of downloading JAson file is to make it more faster and secured in the website host itself better tht requested it 
from another domain.
I've been using PHP instead of Java, Ruby or Python because I don't know any of these languages but im looking forward to learn it,
it's also because PHP is a server side language and it's easy to follow.
what I'm trying to do with this small application is searching for each given result by the user, so I tool the Destination input value,
start date and end date and compared it to the given Jason sample.
I created Util class so i can make as much as methods and functions that I need to complete the rearch process, Util class contains
two functions; the first one called CalculateLengthOfStay takes two parameters to calculate the length of stay and the other function
named changeDateFormat created to change the format for user entered date. changeDateFormat is made because it was written at the task
description that the format should be 2017-05-03 and at Jason file it has the opposite format as: 03/21/2017 so I made a function to 
convert any given date to the format as the one in Jason file.
I took the Jasin file and put in in an array to search in it by using for loop and if statement, the reason for using this way is that
I might have multiple and special cases that I should be solved.
one of the issues I have seen that "numberOfRoomsLeft" has the same value and it's zero. I thought that the user could search of a hotel
and he/she can't find a room in it so why it would be shown? there is no need for it to be shown. I might misunderstood it, maybe.
The task took me a while to do a small part of it due the short time and the low knowledge of JAVA,Ruby and Python. I've tried to learn
s bit about Java so I can make the task but I need more time to learn JAVA and I don't want to waste solving the tast because of this,
so I tried to do it by using PHP.
I wanted to compare Jason data by using if statment as the following:
1. one part of the statment for destination sity or country, it looks for a string keyword and returns the index of it if it's exist.
2. start date it looks for travel start date for hotel and return true if the start travel date is the same.
3. end date has the same functionality as start date.
4. find the length of stay after calculating it.
all four points concatenated at the same point, for example looking for Budapest destination,start date: 2017-3-21 and end date: 2017-3-24
all of them will be found and it will also look up for 3 days of stay as well.
I was looking for activating the following but due the time I couldn't spend more that 8 hours on it with this documentation:
1."averagePriceValue" searching for a minimum price or maximum price
2."hotelTotalBaseRate" filtering the minimum and maximum base rate
3."hotelTotalTaxesAndFees" filtering the minimum and maximum total tax fees
4."hotelTotalMandatoryTaxesAndFees" filtering the minimum and maximum total mandotary tax fees
5."originalPricePerNight" filtering the minimum and maximum price per night
6."numberOfPeopleViewing" filtering the minimum and maximum people views
7."numberOfPeopleBooked" filtering the minimum and maximum people booked
8."movingAverageScore".

I made the result lists all hotel deals and it's linked to hotel itself, it also shows the image, address, description for each listed hotel.
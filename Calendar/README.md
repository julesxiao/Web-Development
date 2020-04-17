## CALENDAR
### Intro
- A simple calendar that allows users to add and remove events dynamically.

- In this project **JavaScript** is used to to process user interactions at the web browser, without ever refreshing the browser after the initial web page load. **AJAX** is used to run server-side scripts that query the database to save and retrieve information, including user accounts and events.

### Home page  
    http://ec2-18-222-223-208.us-east-2.compute.amazonaws.com/~shuo/module5/group/calendar.html

### Login information
    Each line represents the pair of the username and the password
    testuser1 Cse330@  
    testuser2 Cse330@  

### Other functions  
- Each event has a tag, the default tag is normal, which is in the color of blue. Users can also 
tag an event with work(green) or study(yellow).By checking and unchecking
the tag boxes on the top right corner, users can enable/disable the tags in the calendar view.   
- Users can share their calendar with additional users.   
- Use cookie to keep login status, when users refresh the webpage they will not logout.    
- Use a free holiday API (https://www.calendarindex.com/), Calendar could present holidays of the current year, in the color of purple, and allow one request per second (so please don't refresh page too fast XD).     

## CALENDAR
### Intro
- This project would create a calendar that allows users to add and remove events dynamically using **JavaScript**

- In this project **JavaScript** is used to to process user interactions at the web browser, without ever refreshing the browser after the initial web page load. **AJAX** is used to run server-side scripts that query the database to save and retrieve information, including user accounts and events.

- Example: https://calendar.google.com/

### Home page  
    http://ec2-18-222-223-208.us-east-2.compute.amazonaws.com/~shuo/module5/group/calendar.html

### Login information
    Each line represents the pair of the username and the password
    testuser1 Cse330@  
    testuser2 Cse330@  

### Functions  
- Support a month-by-month view of the calendar.
    Show one month at a time, with buttons to move forward or backward.
    There should be no limit to how far forward or backward the user can go.
- Users can register and log in to the website.
- Unregistered users should see no events on the calendar.
- Registered users can add events.
- Registered users see only events that they have added.
- Registered users can delete their events, but not the events of others.
- All user and event data should be kept in a database.
- At no time should the main page need to be reloaded.
- Each event has a tag, the default tag is normal, which is in the color of blue. Users can also 
tag an event with work(green) or study(yellow).By checking and unchecking
the tag boxes on the top right corner, users can enable/disable the tags in the calendar view.   
- Users can share their calendar with additional users.   
- Use cookie to keep login status, when users refresh the webpage they will not logout.    
- Use a free holiday API (https://www.calendarindex.com/), Calendar could present holidays of the current year, in the color of purple, and allow one request per second (so please don't refresh page too fast XD).     

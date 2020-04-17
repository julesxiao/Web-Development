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

### Functions  
- Support a month-by-month view of the calendar.
    Show one month at a time, with buttons to move forward or backward.
    There should be no limit to how far forward or backward the user can go.
- Users can register and log in to the website.
You may leverage your MySQL project code and database from module 3 to get started.
- Unregistered users should see no events on the calendar.
- Registered users can add events.
All events should have a date and time, but do not need to have a duration.
You do not need to support recurring events (where you add an event that repeats, for example, every monday).
- Registered users see only events that they have added.
Your AJAX should not ask the server for events from a certain username. Instead, your AJAX should ask the server for events, and the server should respond with the events for only the currently-logged-in user (from the session). Can you think of why?
- Registered users can delete their events, but not the events of others.
Again, the server should delete events based on the username present in the session. (If it deletes only based on an Event ID, an attacker could feed any arbitrary Event ID to your server, even if he/she didn't own that event.)
- All user and event data should be kept in a database.
- At no time should the main page need to be reloaded.
User registration, user authentication, event addition, and event deletion should all be handled by JavaScript and AJAX requests to your server.
- Your page needs to work in the versions of Firefox and Chrome installed on the lab computers.
- Each event has a tag, the default tag is normal, which is in the color of blue. Users can also 
tag an event with work(green) or study(yellow).By checking and unchecking
the tag boxes on the top right corner, users can enable/disable the tags in the calendar view.   
- Users can share their calendar with additional users.   
- Use cookie to keep login status, when users refresh the webpage they will not logout.    
- Use a free holiday API (https://www.calendarindex.com/), Calendar could present holidays of the current year, in the color of purple, and allow one request per second (so please don't refresh page too fast XD).     

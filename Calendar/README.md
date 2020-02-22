# module5 group
1. Intro
Build a simple calendar that allows users to add and remove events dynamically.

You will use JavaScript to process user interactions at the web browser, without ever refreshing the browser after the initial web page load. You may use a JavaScript library of your choice, including Ext JS, so long as that JavaScript library does not defeat the purpose of the assignment. If you have questions about this, ask. In particular, libraries like FullCalendar are unacceptable.

Your application should utilize AJAX to run server-side scripts that query your database to save and retrieve information, including user accounts and events.

We have also written some functions to help you get started: JavaScript Calendar Library

2. Home page  
http://ec2-18-222-223-208.us-east-2.compute.amazonaws.com/~shuo/module5/group/calendar.html

3. Login information(Each line represents the pair of the username and the password)  
testuser1 Cse330@  
testuser2 Cse330@  

4. Creative portion  
    a. Each event has a tag, the default tag is normal, which is in the color of blue. Users can also 
    tag an event with work(green) or study(yellow).By checking and unchecking
    the tag boxes on the top right corner, users can enable/disable the tags in the calendar view.   
    b. Users can share their calendar with additional users.   
    c. Use cookie to keep login status, when users refresh the webpage they will not logout.    
    d. Use a free holiday API (https://www.calendarindex.com/), Calendar could present holidays of the current year, in the color of purple, and allow one request per second (so please don't refresh page too fast XD).     
    

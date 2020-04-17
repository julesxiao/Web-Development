# News Web Site
## Intro
    Framework: PHP and MySQL
    Examples:
    http://digg.com/
    http://slashdot.org/
    https://news.ycombinator.com/

## Home page
    http://ec2-18-222-223-208.us-east-2.compute.amazonaws.com/~shuo/module3/group/home.php

## Login information(Each line represents the pair of the username and the password)  
    admin Cse330@  
    testuser1 Testuser1@  
    testuser2 Testuser2@  
    testuser3 Testuser3#  
    Testuser4 Testuser4$

## Functions
- Users can register for accounts and then log in to the website.
- Accounts should have both a username and a secure password. NEVER store plaintext passwords in a database!
- Registered users can submit story commentary.
  - A link can be associated with each story, and they should be stored in a separate database field from the story
- Registered users can comment on any story.
- Unregistered users can only view stories and comments.
- Registered users can edit and delete their stories and comments.
- All data must be kept in a MySQL database (user information, stories, comments, and links).
- Search through all the stories titles(with sql command 'LIKE')  
  - Fill in the search column the information you wanna search for, and press Go. It should return the stories titles which are relative to the search.  
- Reset password via email (an additional table for saving reset requests, and email module)  
  - Sign up first, using a valid email address  
  - Press the Profile button on the upper right, then press the reset password button  
  - A mail should be sent to your email, you may check it in spam emails, the email address is goodgood.study4321@gmail.com  
  - Use the link providing in the mail to reset your password  

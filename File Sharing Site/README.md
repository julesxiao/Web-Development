# File Sharing Site
## Intro
- A simple file sharing site that supports uploading, viewing, and deleting files associated with various users using **PHP**

## Functions
- You should have a file named users.txt stored in a secure place on your filesystem. It should have at least three usernames, with one username per line.
- Passwords add an extra layer of complexity (encryption) that we will cover in Module 3. You will not earn credit for implementing passwords as your creative portion for this module.
- Users of the file sharing site should be able to enter their username and then log in.
- Users should see a list of all files associated with their username after the log in.
- Users should be able to view, upload, and delete files associated with their username.
- The URI should NOT reveal the internal file structure of your web site.
    - Example of what not to do: http://www.example.com/download.php?file=/home/paul/file.txt
    - Another bad example: http://www.example.com/~user/file.txt
    - Good example: http://www.example.com/view.php?user=music&name=file.txt
- Sign up module, add a new username to users.txt and create a new folder for this user.
- Display file upload date and size in the uploaded file list.
- Implement alert box to respond to user action. 
- Deleteuser module, on the top right you may click "delete user", it will jump to the delte user page, you may enter the username you wanna delete and hit "comfirm". The webpage would give information about if the action succeeded or not.

## Instructions
    Log in:
    http://ec2-18-222-223-208.us-east-2.compute.amazonaws.com/~shuo/module2/group/login.php
## Instructions

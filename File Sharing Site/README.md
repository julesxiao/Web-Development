# Moduel 2 Group Portion
1. Intro
You will be making a simple file sharing site that supports uploading, viewing, and deleting files associated with various users. Details:

You should have a file named users.txt stored in a secure place on your filesystem. It should have at least three usernames, with one username per line.
Passwords add an extra layer of complexity (encryption) that we will cover in Module 3. You will not earn credit for implementing passwords as your creative portion for this module.
Users of the file sharing site should be able to enter their username and then log in.
You may implement logins using session variables, or you may implement them using a GET parameter that is passed between pages. You will need to always use sessions starting in Module 3.
Users should see a list of all files associated with their username after the log in.
Users should be able to view, upload, and delete files associated with their username.
The URI should NOT reveal the internal file structure of your web site.
Example of what not to do: http://www.example.com/download.php?file=/home/paul/file.txt
Another bad example: http://www.example.com/~user/file.txt
Good example: http://www.example.com/view.php?user=music&name=file.txt
In general, don't reveal any internal information about the site.
Food for thought: Given that Apache processes (with the exception of the main process) do not run as root, but rather as the user apache, how can you allow both your user account and the php scripts to read and write the
necessary files?
Hint: You shouldn't be storing the user-uploaded files in public_html (that is only the place for your own web-page files),
Hint number 2: you will need to use chown to change permissions to let user apache have permissions on the user-files (that are not in the public_html folder). If you don't know what this does or how to do this, look at the Apache page
You should customize your file sharing site by implementing an additional feature or two as part of the creative portion.
You will probably find the PHP guide on this wiki to be helpful: PHP#Other PHP Tips

2.  http://ec2-18-222-223-208.us-east-2.compute.amazonaws.com/~shuo/module2/group/login.php

3. Creative portion: 
    1. sign up module, add a new username to users.txt and create a new folder for this user.
    2. display file upload date and size in the uploaded file list.
    3. implement alert box to respond to user action. 
    4. deleteuser module, on the top right you may click "delete user", it will jump to the delte user page, you may enter the username you wanna delete and hit "comfirm". The webpage would give information about if the action succeeded or not.

- Log in details:
You may use the following usernames to log in: lake, zhong, abc.
Or you may create a new user using the sign up page.
## SECOND-HAND TRADING WEBSITE
### Intro
* Framework: django, vue.js

### Instructions  
* python3 required
* required package  

        pip install django  
        pip install pillow  

* create database  

        cd mysite/  
        python manage.py makemigrations  
        python manage.py migrate

* (optional) create super user account  

        python manage.py createsuperuser  

* start server  

        python manage.py runserver 8000  
        visit 127.0.0.1:8000
        visit 127.0.0.1:8000/admin using super user account

* superuser

        Visit http://ec2-18-224-14-12.us-east-2.compute.amazonaws.com:8000/ . 
        You can inspect the database by visiting http://ec2-18-224-14-12.us-east-2.compute.amazonaws.com:8000/admin/  
        using account (username:shuo, password:cse330) to login as superuser

### Functions
        
* Account management
    - user can signup
    - user can signin
    - user can signout
    - user can reset password
    - user can delete account
* Post items
    - user can post item for sale with detailed description(title, image, fineness, description, location, prices, contact, catogary)
    - user can modify, delete post
    - user can upload images for item description
* Look through items
    - user can look through all items
    - user can look through items based on catogary
* Others
    - user can leave messages under posts
    - user can search items
    - user can filter(sort) trough items(example: distance, price, publish dates, fineness)   
* Best practice
    - Code is well formatted and easy to read, with proper commenting 
    - If storing passwords, they are stored salted and hashed 
    - All AJAX requests that either contain sensitive information or modify something on the server are performed via POST,         not GET 
    - Safe from XSS attacks; that is, all content is escaped on output
    - Safe from SQL Injection attacks 
    - CSRF tokens are passed when editing or removing events 
    - Session cookie is HTTP-Only 
    - Page passes the W3C validator

# Creative Project
1. Intro
This is a second-hand trading website

2. Instructions  
    1. python3 required
        - required package  
            
                pip install django  
                pip install pillow  
            
        - create database  
            
                cd mysite/  
                python manage.py makemigrations  
                python manage.py migrate

        - (optional) create super user account  
            
                python manage.py createsuperuser  
                
        - start server  
           
                python manage.py runserver 8000  
            
        visit 127.0.0.1:8000
        visit 127.0.0.1:8000/admin using super user account
        
    2. visit http://ec2-18-224-14-12.us-east-2.compute.amazonaws.com:8000/  
        You can inspect the database by visiting http://ec2-18-224-14-12.us-east-2.compute.amazonaws.com:8000/admin/  
        using account (username:shuo, password:cse330) to login as superuser

# Second hand trading website
##### Framework: django, vue.js
1. Complete creative project description(5pts)
2. Account management(10pts)
    - user can signup(2pts)
    - user can signin(2pts)
    - user can signout(2pts)
    - user can reset password(2pts)
    - user can delete account(2pts)
3. Post items(30pts)
    - user can post item for sale with detailed description(10pts) (title, image, fineness, description, location, prices, contact, catogary)
    - user can modify, delete post(10pts)
    - user can upload images for item description(10pts)
4. Look through items(10pts)
    - user can look through all items(5pts)
    - user can look through items based on catogary(5pts)
5. Best practice(20pts)
    - Code is well formatted and easy to read, with proper commenting (2pts)
    - If storing passwords, they are stored salted and hashed (2pts)
    - All AJAX requests that either contain sensitive information or modify something on the server are performed via POST, not GET (3pts)
    - Safe from XSS attacks; that is, all content is escaped on output (3pts)
    - Safe from SQL Injection attacks (2pts)
    - CSRF tokens are passed when editing or removing events (3pts)
    - Session cookie is HTTP-Only (3pts)
    - Page passes the W3C validator (2pts)
6. Usability(5pts)
    - Site is intuitive to use and navigate (4pts)
    - Site is visually appealing (1pts)
7. Creative portion(20pts)
    - user can leave messages under posts
    - user can search items
    - user can filter(sort) trough items(example: distance, price, publish dates, fineness)   

Approved by Nikash Taskar
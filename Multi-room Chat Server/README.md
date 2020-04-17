## MULTI-ROOM CHAT SERVER
### Intro
* This project will create a multi-room chat server using **Node.JS** and **Socket.IO**. 

* This chat service will contain a main lobby where users sign on with a nickname and can communicate with each other. Users may also create chat rooms for other to join. The entire app should be displayed on a single webpage, listing the room you are in, all available rooms, and the users in the current room.

### Functions
* Administration of user created chat rooms:
    - Users can create chat rooms with an arbitrary room name.
    - Users can join an arbitrary chat room.
    - The chat room displays all users currently in the room. 
    - A private room can be created that is password protected. 
    - Creators of chat rooms can temporarily kick others out of the room.
    - Creators of chat rooms can permanently ban users from joining that particular room. 
* Messaging:
    - A user's message shows their username and is sent to everyone in the room. 
    - Users can send private messages to another user in the same room. 
* Display the number of unread messages, which is shown on the left panel following the rooms(in the Room section) and the user names(in the PM section).  
* Send images while chatting.  
* Send emoji while chatting.
    
### Instruction  
* Type `node server.js`   
* The arrow on the top right corner is to join a room.  
* The plus symbol is to create a new room.   
* Click on any user(except the user itself) listed in the right panel in the Users section would send a private message to that user.

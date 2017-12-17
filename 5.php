<!DOCTYPE html>
<html>
<head>
	<title>profilepage</title>
	<style type="text/css">
/* Style the horizontal navbar */
	#navbar{
            width: 100%;
            height: 50px;
            background-color: #333;
            font-size: 40px;
            color: white;
            }

		/* Style the links inside the sidenav */
#mySidenav a {
    position: absolute; /* Position them relative to the browser window */
    left: -100px; /* Position them outside of the screen */
    transition: 0.3s; /* Add transition on hover */
    padding: 15px; /* 15px padding */
    width: 110px; /* Set a specific width */
    text-decoration: none; /* Remove underline */
    font-size: 20px; /* Increase font size */
    color: white; /* White text color */
    border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
    left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#home {
    top: 70px;
    background-color: #494958;
}

#feed {
    top: 130px;
    background-color: #2196F3;
}

#about {
    top: 190px;
    background-color: #f44336;
}

#message {
    top: 250px;
    background-color: #9bd32f;
}

#friends {
    top: 310px;
    background-color: #009f94;
}

#mentors {
    top: 370px;
    background-color: #445a2f; 
}

#settings {
    top: 430px;
    background-color: #631e50; 
}
	</style>
</head>
<body>

<div id="navbar">
	INTERCONNECT
</div>

<div id="mySidenav" class="sidenav">
  <a href="#" id="home">Home</a>
  <a href="#" id="feed">Feed</a>
  <a href="#" id="about">About</a>
  <a href="#" id="message">Messages</a>
  <a href="#" id="friends">Friends</a>
  <a href="#" id="mentors">Mentors</a>
  <a href="#" id="settings">Settings</a>
</div>

<div style="margin-left:80px;">
  <h2>Profile</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</body>
</html>
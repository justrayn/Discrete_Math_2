<?php
// This is PHP code. For example, you might fetch user information from a database here.
$user = "User21101004";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geo:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\css\profile.css">
    <link rel="stylesheet" href="..\css\navbar.css">
    <link rel="stylesheet" href="..\css\footer.css">
</head>
<body>
<nav>
        <div class="logo">
            <img src="..\img\logo.png" alt="">
        </div>
        <div class="search-bar">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="#">Events</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </div>
</nav>  
<div class="ads">
   
</div>
<div class="profile">
    <div class="leftmain">
            <ul class="dashboard">
                <li class ="active"><a href="#">Account Dashboard</a></li>
                <li><a href="events.php">My Events</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
    </div>
    <div class="rightmain">
            <h2>Hello, User!</h2>
            <h3> Account Information </h3>
            <div class="infopart">
                <ul class="information">
                    <li><a href="#">ID number: </a></li>
                    <li><a href="#">Name: </a></li>
                    <li><a href="#">Course: </a></li>
                    <li><a href="#">Year: </a></li>
                </ul>    
            </div>
            <div class="maincontent">
                <ul class="information-content">
                    <li><a href="#">233101567 </a></li>
                    <li><a href="#">Jose Rizal </a></li>
                    <li><a href="#">BSCS </a></li>
                    <li><a href="#">1 </a></li>
                </ul>   
            </div>
            <div class="ces">
                <h3> CES points:</h3>
                <div class="cespoints">
                <h3> 30 </h3>
            </div>
            </div>

            <div class="editpart">
                <a href="#">EDIT PROFILE  </a></li>
            </div>
    </div>
        
</div>
</body>
</html>
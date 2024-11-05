<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geo:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\css\admin-accounts.css">
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
<div class="myevents">
    <div class="leftmain">
    
            <ul class="dashboard">
                <li class ="active"><a href="accdash-admin.php">Account Dashboard</a></li>
                <li><a href="#">Accounts</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
    </div>
    <div class="rightmain">
    <div class="topbar">
        </div>
        <p class="title"> ACCOUNTS</p>
        <div class="search">
            <input type="text" placeholder="Search..">
        </div>
        <table class="scndtopbar">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Account type</th>
            </tr>
        </thead>
        <tbody class="ongoing-events-info">
            <tr>
                <td>Student name</td>
                <td>2110876@usc.edu.ph</td>
                <td>client</td>
            </tr>
            <tr>
                <td>organization</td>
                <td>2org@gmail.com</td>
                <td>Host</td>
            </tr>
        </tbody>
    </table>
    </div>

        
</div>
</body>
</html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geo:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="..\css\accdash-admin-approved.css">
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
                    <li><a href="#">Account Dashboard</a></li>
                    <li><a href="Admin-Accounts.php">Accounts</a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
        </div>
        <div class="rightmain">
            <div class="topbar">
            <ul> 
                <li><a href ="accdash-admin.php">All Events</a></li>
                <li><a href ="#">Approved Events</a></li>
                <li><a href ="accdash-admin-pending.php">Pending Events</a></li>
            </ul>
            </div>
            <p class="ongoing"> On-going Events (1)</p>
            <table class="scndtopbar">
            <thead>
                <tr>
                    <th>EVENT NAME</th>
                    <th>STATUS</th>
                    <th>HOSTED BY</th>
                    <th>CES POINTS</th>
                </tr>
            </thead>
            <tbody class="ongoing-events-info">
                <tr>
                    <td><img src="..\img\sample2.png" alt="Description of Image 1" style="width: 40px; height: 40px;"> DCISM DISCO</td>
                    <td>Approved</td>
                    <td>CISCO</td>
                    <td>30</td>
                </tr>
            </tbody>
        </table>
        <p class="upcoming">Upcoming Events(0)</p>
        <table class="scndtopbar">
            
            <tbody class="ongoing-events-info">
                <tr>
                <td>no upcoming events yet</td>
                    
                </tr>
            </tbody>
        </div>

            
    </div>
    </body>
    </html> 
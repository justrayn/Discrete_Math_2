<html>
<head>
    <link rel="stylesheet" href="..\css\navbar.css">
    <link rel="stylesheet" href="..\css\footer.css">
    <link rel="stylesheet" href="..\css\events.css">
    <title>USC CONNECT</title>
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
    <div class="container">
        <div class="advertise">
            <!-- ads -->
        </div>
        <div class="main-content">
            <div class="filter1">
                <select name="Sort by" id="">
                    <option value="" hidden>Sort by</option>
                    <option value="">CES points</option>
                    <option value="">Latest</option>
                    <option value="">Oldest</option>
                </select>
            </div>
            <div class="event-content">
                <div class="event-filter">
                    <hr>
                    <details>
                        <summary>Campus</summary><br>
                            <div class="filter">
                                <input type="checkbox">
                                <label>Talamban campus</label><br>
                                <input type="checkbox">
                                <label>Main campus</label>
                            </div>
                    </details><br>

                    <details>
                        <summary>Department</summary><br>
                            <div class="filter">
                                <input type="checkbox">
                                <label>SAS</label><br>
                                <input type="checkbox">
                                <label>SAFAD</label>
                            </div>
                    </details><br>
                </div>
                <div class="event-list">
                    <hr>
                    <div class="card-container">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..\img\sample2.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">View details</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..\img\sample.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">View details</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..\img\sample2.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">View details</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..\img\sample.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">View details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>
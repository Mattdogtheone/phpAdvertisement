<?php 
    /**
     * 
     * This is the index where the user can visit the two pages of the site, users and advertisements. 
     * 
     */
?>

<!DOCTYPE html>
<html>
<head>
    <!--Configuring the head of the html-->
    <meta charset="UTF-8">
    <title>Advertisements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Adding the stylesheet to the html-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!--Creating the navigation bar for the site-->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="brand">Advertisements</a>
            <ul class="nav-links">
                <li><a href="users">Users</a></li>
                <li><a href="advertisements">Advertisements</a></li>
            </ul>
        </div>
    </nav>
    <!--Welcoming the sites visitor-->
    <div class="greet">
        <h1>Welcome to advertisements!</h1>
        <h2>Use the navigation bar at the top to navigate.</h2>
    </div>
</body>
</html>
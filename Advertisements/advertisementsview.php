<?php 
    /**
     * 
     * This is the UsersView where the data from the database is shown
     * 
     */

    //autoLoader for the classes
    include 'includes/autoloader.inc.php'
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

    <!--Creating the navigation bar for the site-->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="brand">Advertisements</a>
            <ul class="nav-links">
                <li><a href="home">Home</a></li>
                <li><a href="users">Users</a></li>
            </ul>
        </div>
    </nav>
</head>
<body>

    <h2>
        Advertisements
    </h2>
    <!--Showing the list of users that have been added to the database-->
    <table>
        <tr>
            <th>UserName</th>
            <th>Title</th>
        </tr>
        <?php
            //Creating the necessary objects for the query
            $advModel = new Advertisement();
            $advService = new AdvertisementService($advModel);
            $advController = new AdvertisementController($advService);

            //Calling the function showAllAdvertisements()
            $adsResutls = $advController->showAllAdvertisements();

            //Adding the fetched data to the html table
            foreach($adsResutls as $row){
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["title"] . "</td></tr>";
            }
            
        ?>  
    </table>
    
    <!--Making a form for creating new users-->
    <H2>
        Create new Advertisement
    </H2>
    <br>
    <!--Div class for css-->
    <div class="form-container">
        <form action="includes/createadv.inc.php" method="post">
            <!--Creating a text input for the user to type in the new users name-->
            <label for="title">Title of the new advertisement:</label>
            <br>
            <input type="text" name="title" id="title"/>
            <br>
            <!--Creating a dropdown menu for the user to choose the user for the new advertisement-->
            <label for="dropdown">Select the username:</label>
            <br>
            <select id="dropdown" name="dropdown" required>
                <!--The php fetch for the dropdown menu-->
                <?php
                    //Creating the necessary objects for the query
                    $userModel = new User();
                    $userService = new UserService($userModel);
                    $userController = new UserController($userService);
                    
                    //Calling the function showAllAdvertisements()
                    $usersResults = $userController->showAllUsers();

                    //Adding the fetched data to the dropdown menu
                    foreach ($usersResults as $row){
                        echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['name']) . "</option>";
                    } 
            ?>
            <!--Creating a submit button wich sends a post to the createuser.inc.php-->
            </select>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
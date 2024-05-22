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
</head>
<body>
    <!--Creating the navigation bar for the site-->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="brand">Advertisements</a>
            <ul class="nav-links">
                <li><a href="home">Home</a></li>
                <li><a href="advertisements">Advertisements</a></li>
            </ul>
        </div>
    </nav>
    <h2>
        Users
    </h2>
    <!--Showing the list of users that have been added to the database-->
    <table class="styled-table">
        <tr>
            <th>UserName</th>
        </tr>
        
        <?php
            //Creating the necessary objects for the query
            $userModel = new User();
            $userService = new UserService($userModel);
            $userController = new UserController($userService);
            
            //Calling the function showAllUsers()
            $resutls = $userController->showAllUsers();
            
            //Adding the fetched data to the html table
            foreach($resutls as $row){
                echo "<tr><td>" . $row["name"] . "</td></tr>";
            }
            
        ?>  
    </table>
    
    <!--Making a form for creating new users-->
    <H2>
        Create new user
    </H2>
    <br>
    <!--Div class for css-->
    <div class="form-container">
        <form action="includes/createuser.inc.php" method="post">
            <!--Creating a text input for the user to type in the new users name-->
            <label for="username">Name of new user:</label>
            <br>
            <input type="text" name="uname" id="uname">
            <br>
            <!--Creating a submit button wich sends a post to the createuser.inc.php-->
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
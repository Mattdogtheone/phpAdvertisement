<?php 
    include 'includes/autoloader.inc.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Advertisements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

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
    <table>
        <tr>
            <th>UserName</th>
            <th>Title</th>
        </tr>
        <?php
            $advModel = new Advertisement();
            $advService = new AdvertisementService($advModel);
            $advController = new AdvertisementController($advService);
            $adsResutls = $advController->showAllAdvertisements();

            
            foreach($adsResutls as $row){
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["title"] . "</td></tr>";
            }
            
        ?>  
    </table>
    

    <H2>
        Create new Advertisement
    </H2>
    <br>
    <div class="form-container">
        <form action="includes/createadv.inc.php" method="post">
            <label for="title">Title of the new advertisement:</label>
            <br>
            <input type="text" name="title" id="title"/>
            <br>
            <label for="dropdown">Select the username:</label>
            <br>
            <select id="dropdown" name="dropdown" required>

                <?php
                    $userModel = new User();
                    $userService = new UserService($userModel);
                    $userController = new UserController($userService);
                    $usersResults = $userController->showAllUsers();
                    foreach ($usersResults as $row){
                        echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['name']) . "</option>";
                    } 
            ?>

            </select>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
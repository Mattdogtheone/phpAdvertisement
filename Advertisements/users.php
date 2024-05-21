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
</head>
<body>

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
    <table class="styled-table">
        <tr>
            <th>UserName</th>

        </tr>
        <?php
            $usersObj = new UsersView();
            $resutls = $usersObj->showUsers();

            foreach($resutls as $row){
                echo "<tr><td>" . $row["name"] . "</td></tr>";
            }
            
        ?>  
    </table>
    

    <H2>
        Create new user
    </H2>
    <br>
    <div class="form-container">
        <form action="includes/createuser.inc.php" method="post">
            <label for="username">Name of new user:</label>
            <br>
            <input type="text" name="uname" id="uname">
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
    
</body>
</html>
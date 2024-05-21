<?php 
    include 'includes/autoloader.inc.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Advertisements</title>
</head>
<body>
    <h2>
        Users
    </h2>
    <table>
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

    <form action="includes/createuser.inc.php" method="post">
        <label for="username">Name of new user:</label>
        <br>
        <input type="text" name="uname" id="uname">
        <br>
        <input type="submit" value="submit">
    </form>

    <h2>Advertisements</h2>

    
</body>
</html>
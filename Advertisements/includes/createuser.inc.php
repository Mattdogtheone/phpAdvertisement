<?php  

/**
 * 
 * This include php is to parse data from a form in the users view php, to the UserController
 * 
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Fetching the data from the post
    $name = $_POST['uname'];
    
    //All the necessary classes has an include. The autoLoader that has been used for the view does not work here (I haven not figured it out why)
    include "../classes/db.class.php";
    include "../classes/user.class.php";
    include "../classes/userservice.class.php";
    include "../classes/usercontroller.class.php";

    //Creating the necessary object so that the data can be inserted to the database
    $userModel = new User();
    $userService = new UserService($userModel);
    $userController = new UserController($userService);

    //Calling the function createUser()
    $userController->createUser($name);

    //Rerouting the user to the users page
    header("location: ../users");
}
?>


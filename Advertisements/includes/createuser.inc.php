<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['uname'];
    
    include "../classes/db.class.php";
    include "../classes/user.class.php";
    include "../classes/userservice.class.php";
    include "../classes/usercontroller.class.php";

    $userModel = new User();
    $userService = new UserService($userModel);
    $userController = new UserController($userService);
    echo $name;
    $userController->createUser($name);

    header("location: ../users");
}
?>


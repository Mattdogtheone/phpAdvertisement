<?php  

    $name = $_POST['uname'];
    
    include "../classes/db.class.php";
    include "../classes/users.class.php";
    include "../classes/userscontroller.class.php";

    $userContrObj = new UsersController();
    $userContrObj->createUser($name);

    header("location: ../index.php");
?>

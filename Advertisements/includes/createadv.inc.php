<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    
    $userid = $_POST['dropdown'];

    include "../classes/db.class.php";
    include "../classes/advertisements.class.php";
    include "../classes/advertisementcontroller.class.php";

    $advContObj = new AdvertisementController();
    $advContObj->createAdvertisement($userid, $title);
    var_dump($advContObj);

    header("location: ../advertisements");

}
?>


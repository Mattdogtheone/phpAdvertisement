<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    
    $userid = $_POST['dropdown'];

    echo $title . $userid;

    include "../classes/db.class.php";
    include "../classes/advertisement.class.php";
    include "../classes/advertisementservice.class.php";
    include "../classes/advertisementcontroller.class.php";

    $advModel = new Advertisement();
    $advService = new AdvertisementService($advModel);
    $advController = new AdvertisementController($advService);
    $advController->createAdvertisement($userid, $title);

    header("location: ../advertisements");

}
?>


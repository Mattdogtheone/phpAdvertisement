<?php  

/**
 * 
 * This include php is to parse data from a form in the advertisements view php, to the AdvertisementController
 * 
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Fetching the data from the post
    $title = $_POST['title'];
    //Fetching the data from the post
    $userid = $_POST['dropdown'];

    //All the necessary classes has an include. The autoLoader that has been used for the view does not work here (I haven not figured it out why)
    include "../classes/db.class.php";
    include "../classes/advertisement.class.php";
    include "../classes/advertisementservice.class.php";
    include "../classes/advertisementcontroller.class.php";

    //Creating the necessary object so that the data can be inserted to the database
    $advModel = new Advertisement();
    $advService = new AdvertisementService($advModel);
    $advController = new AdvertisementController($advService);

    //Calling the function createAdvertisement()
    $advController->createAdvertisement($userid, $title);

    //Rerouting the user to the advertisements page
    header("location: ../advertisements");

}
?>


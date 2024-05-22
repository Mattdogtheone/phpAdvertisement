<?php

/**
 * 
 * Class AdvertisementController
 * 
 * This is the controller layer of the advertisements which manages the data between the user and the upper layers (AdvertisementService and Advertisement)
 * It has a protected variable called $advertisementService
 * 
 */

class AdvertisementController {
    protected $advertisementService;

    /**
     * 
     * function __construct
     * This is the constructor of the class, which initializes the protected variable $advertisementService. The variable 
     * becomes an object of the class AdvertisementService
     * 
     * @param AdvertisementService $advertisementService Initialization of the variable as an object of AdvertisementService
     */

    public function __construct(AdvertisementService $advertisementService) {
        $this->advertisementService = $advertisementService;
    }

    /**
     * 
     * function showAllAdvertisements()
     * This function is calling the getAllAdvertisements() which is in the function in the AdvertisementService 
     * through the object $advertisementService
     * 
     * @return array $advertisements Returns an array of data from advertisements and users table. The array has two keys named 'name' from the users table  and 'title' from the advertisements table
     */

    public function showAllAdvertisements() {
        $advertisements = $this->advertisementService->getAllAdvertisements();
        return $advertisements;
    }

    /**
     * 
     * function createAdvertisement()
     * This function is calling the createAdvertisement() function in the AdvertisementService
     * through the object $advertisementService
     * 
     * @param int $userId Data that the user had chosen from the users table
     * @param string $title Data that the user gave as a text input
     */

    public function createAdvertisement($userId, $title) {
        if ($this->advertisementService->createAdvertisement($userId, $title)) {
            echo "Advertisement created successfully.";
        } else {
            echo "Error creating advertisement.";
        }
    }
}

?>

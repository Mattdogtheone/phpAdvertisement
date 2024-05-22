<?php

/**
 * 
 * class advertisementService
 * 
 * This is the service layer of the advertisements table. This is the layer in between the Model and the Controller layers
 * It has a protected variable called $advertisementModel
 * 
 */

class AdvertisementService {
    protected $advertisementModel;

    /**
     * 
     * Constructor of AdvertisementService
     * This constructor initializes the protected variable as an object of Advertisement(Model)
     * 
     * @param Advertisement $advertisementModel Initialization of the variable as an object of Advertisement
     */

    public function __construct(Advertisement $advertisementModel) {
        $this->advertisementModel = $advertisementModel;
    }

    /**
     * 
     * function getAllAdvertisements
     * Calls the function getAllAdvertisements from Advertisement through the object named advertisementModel 
     * 
     * @return func getAllAdvertisements() Returns the function from Advertisement class (Model) to the Controller
     */

    public function getAllAdvertisements() {
        return $this->advertisementModel->getAllAdvertisements();
    }

    /**
     * 
     * function createAdvertisement()
     * Calls the function createAdvertisement from Advertisement through the object named advertisementModel
     * 
     * @param int $userId Data that has been passed down by the controller
     * @param string $title Data that has been passed down by the controller
     * 
     * @return function createAdvertisement() Returns the function from Advertisement class (Model) to the Controller
     */

    public function createAdvertisement($userId, $title) {
        return $this->advertisementModel->createAdvertisement($userId, $title);
    }
}

?>
